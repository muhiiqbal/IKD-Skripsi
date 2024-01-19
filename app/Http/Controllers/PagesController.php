<?php

namespace App\Http\Controllers;

use App\Models\K1;
use App\Models\K2;
use App\Models\K3;
use App\Models\K4;
use App\Models\K5;
use App\Models\K6;
use App\Models\K7;
use App\Models\K8;
use App\Models\K9;
use App\Models\K10;
use App\Models\K11;
use App\Models\K12;
use App\Models\K13;
use App\Models\K14;
use App\Models\Role;
use App\Models\User;
use App\Models\Ambil;
// use Barryvdh\DomPDF\PDF;
use PDF;
use App\Imports\csvImport;
use App\Models\MasterNilai;
use Illuminate\Http\Request;
use App\Models\csvimpotmodel;
use App\Models\Matkul;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function dashboard(User $user)
    {

        $dosen = User::where('role', 'dosen')->get();
        $admin = User::where('role', 'admin')->get();
        $kaprodi = User::where('role','kaprodi')->get();
        $dekan = User::where('role','dekan')->get();
        $matkul = Matkul::all();

        if (Auth::user()->role == 'admin') {
            $data = MasterNilai::with('user')->orderBy('rata', 'DESC')->get();

        } 
        elseif (Auth::user()->role == 'dekan') 
        {
            $data = MasterNilai::with('user')->orderBy('rata', 'DESC')->get();
        }
        elseif (Auth::user()->role == 'dosen')
        {
            $data = MasterNilai::with('user')->where('user_id' , Auth::user()->id)->orderBy('rata', 'DESC')->get();
        }elseif (Auth::user()->role == 'kaprodi')
        {
            $data = MasterNilai::with('user')->where('user_id' , Auth::user()->id)->orderBy('rata', 'DESC')->get();
        } else {

            $data = [];
        }

        if (!isset($data)) $data = [];
        if (is_null($data)) $data = [];

        $temp = [];
        foreach ($data as $a) {
            if (!is_null($a->user)) {
                $temp []= $a;
            }
        }
        $data = $temp;

        // get data master nilai

        $master = MasterNilai::with('user')->orderBy('rata', 'DESC')->paginate(5);
        
        if (!isset($master)) $master = [];
        if (is_null($master)) $master = [];

        $temp = [];
        foreach ($master as $a) {
            if (!is_null($a->user)) {
                $temp []= $a;
            }
        }
        $master = $temp;
        
        // dd(MasterNilai::with('user')->orderBy('rata', 'DESC')->paginate(5));

        return view('pages.homes', [
            'total_dosen' => count($dosen),
            'total_admin'=>count($admin),
            'total_dekan'=>count($dekan),
            'total_kaprodi'=>count($kaprodi),
            'dosen' => $dosen,
            'kaprodi' => $kaprodi,
            'dekan' => $dekan,
            'matkul'=> $matkul,
            'master' => $master,
            'data' => $data,
        ]);
    }
    
    public function kaprodi()
    {
        $dosen = User::where('role', 'kaprodi')->get();
        $data = MasterNilai::with('user')->orderBy('rata', 'DESC')->get();

        return view('pages.kaprodi', [
            'total_dosen' => count($dosen),
            'dosen' => $dosen,
            'data' => $data,
            'master' => MasterNilai::with('user')->orderBy('rata', 'DESC')->get(),
        ]);
    }

    public function rangkingdosen()
    {
        $dosen = User::where('role', 'dosen')->get();
        $data = MasterNilai::with('user')->orderBy('rata', 'DESC')->get();

        return view('pages.rangkingdosen', [
            'total_dosen' => count($dosen) ,
            'dosen' => $dosen,
            'data' => $data,
            'master' => MasterNilai::with('user')->orderBy('rata', 'DESC')->get(),
        ]);
    }

    public function dekan()
    {
        $dosen = User::where('role', 'dekan')->get();

        return view('pages.dekan', [
            'total_dosen' => count($dosen) ,
            'dosen' => $dosen,
            'master' => MasterNilai::with('user')->orderBy('rata', 'DESC')->get(),
        ]);
        
        
    }

    public function surat()
    {
        $dosen = User::where('role', 'surat')->get();
        $data = MasterNilai::with('user')->orderBy('rata', 'DESC')->get();

        return view('pages.surat', [
            'total_dosen' => count($dosen) ,
            'dosen' => $dosen,
            'data' => $data,
            'master' => MasterNilai::with('user')->orderBy('rata', 'DESC')->get(),
        ]);
    }

    public function pdf(User $user)
    {
        $pdf = FacadePdf::setOption(['orientation' => 'l'])->loadview('pages.pdff', [
            'user' => User::where('id', $user->id)->first(), 
            'nilai' => MasterNilai::where('user_id', $user->id)->first(),
            'matkul' => Ambil::where('user_id', $user->id)->with('matkul')->with('kelas')->get()
        ]);
        
        return $pdf->stream();
    }

    public function ddashboard()
    {
        
        $dosen = User::where('role', 'dosen')->get();

        return view('pages.ddashboard', [
            'total_dosen' => count($dosen) ,
            'dosen' => $dosen,
            'master' => MasterNilai::with('user')->orderBy('rata', 'DESC')->get(),
        ]);

    }

    public function dosen()
    {
        // return view('pages.input-nilai', ['dosen' => User::where('role', 'dosen')->get()]);
        return view('pages.dosen', ['dosen' => User::where('role', 'dosen')->get()]);
    }

    public function alluser()
    {
        return view('pages.all-user', ['user' => User::where('role',request('role'))->get()]);
    }

    public function edituser(User $user)
    {
        return view('pages.edit-user', ['user' => $user]);
    }

    public function allmatkul()
    {
        return view('pages.mmatkul');
    }

    public function roles() 
    {
        return view('pages.roles', ['role' => Role::all()]);
    }

    public function inputnilai()
    {
        return view('pages.input-nilai', ['dosen' => User::where('role', 'dosen')->get()]);
    }

    public function knninput(User $user)
    {
        return view('pages.knn-nilai', [
            'user' => $user,
            'master' => MasterNilai::with('user')->get(),            
            'csv' => csvimpotmodel::all(),
        ]);
    }

    public function pilihmatkul(User $user)
    {
        return view('pages.pilih-matkul', [
            'matkul' => Ambil::where('user_id', $user->id)->with('matkul')->with('kelas')->get(),
            'user' => $user,
            'k1' => K1::where('user_id', $user->id)->first(),
            'k7' => K7::where('user_id', $user->id)->first(),
            'k8' => K8::where('user_id', $user->id)->first(),
            'k9' => K9::where('user_id', $user->id)->first(),
            'k10' => K10::where('user_id', $user->id)->first(),
            'k11' => K11::where('user_id', $user->id)->first(),
            'k12' => K12::where('user_id', $user->id)->first(),
            'k13' => K13::where('user_id', $user->id)->first(),
            'k14' => K14::where('user_id', $user->id)->first()
        ]);
    }

    public function nilaiinput(Ambil $matkul)
    {
        // dd($matkul->user_id);
        return view('pages.nilai', [
            'ambil' => Ambil::where('id', $matkul->id)->with('matkul')->with('user')->with('kelas')->first(),
            'k2' => K2::where('ambil_id', $matkul->id)->with('ambil')->with('user')->first(),
            'k3' => K3::where('ambil_id', $matkul->id)->with('ambil')->with('user')->first(),
            'k4' => K4::where('ambil_id', $matkul->id)->with('ambil')->with('user')->first(),
            'k5' => K5::where('ambil_id', $matkul->id)->with('ambil')->with('user')->first(),
            'k6' => K6::where('ambil_id', $matkul->id)->with('ambil')->with('user')->first(),
        ]);
    }

    
}
