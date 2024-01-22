<?php

namespace App\Http\Controllers;

use App\Models\K1;
use App\Models\K2;
use App\Models\K3;
use App\Models\K7;
use App\Models\K8;
use App\Models\K9;
use App\Models\K10;
use App\Models\K11;
use App\Models\K12;
use App\Models\K13;
use App\Models\K14;
use App\Models\User;
use App\Models\Ambil;
use App\Imports\csvImport;
use App\Models\MasterNilai;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Models\csvimpotmodel;
use App\Models\K4;
use App\Models\K5;
use App\Models\K6;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeawal(User $user, Request $request)
    {
        //K1
        if (K1::where('user_id', $user->id)->exists()) {
            K1::where('user_id', $user->id)->update([
                'total_1' => $request->pertemuan1k1,
                'total_2' => $request->pertemuan2k1,
                'total_hadir' => $request->total_hadirk1,
                'nakhir' => $request->nakhirk1,
                'n1' => $request->nk1,
            ]);

        } else {
            K1::create([
                'user_id' => $user->id,
                'total_1' => $request->pertemuan1k1,
                'total_2' => $request->pertemuan2k1,
                'total_hadir' => $request->total_hadirk1,
                'nakhir' => $request->nakhirk1,
                'n1' => $request->nk1,
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n1' => $request->nk1
                'n1' => $request->nakhirk1
            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n1' => $request->nk1
                'n1' => $request->nakhirk1
            ]);
        }

        if (K7::where('user_id', $user->id)->exists()) {
            K7::where('user_id', $user->id)->update([
                'jumlah_mhs' => $request->jumlah_mhsk7,
                'jumlah_mhs_lulus' => $request->jumlah_mhs_lulusk7,
                'total_presentase' => $request->total_presentasek7,
                'nakhir' => $request->nakhirk7,
                'n7' => $request->nk7
            ]);
        } else {
            K7::create([
                'user_id' => $user->id,
                'jumlah_mhs' => $request->jumlah_mhsk7,
                'jumlah_mhs_lulus' => $request->jumlah_mhs_lulusk7,
                'total_presentase' => $request->total_presentasek7,
                'nakhir' => $request->nakhirk7,
                'n7' => $request->nk7
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n7' => $request->nk7,
                'n7' => $request->nakhirk7,
            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n7' => $request->nk7,
                'n7' => $request->nakhirk7,
            ]);
        }

        //k8
        if (K8::where('user_id', $user->id)->exists()) {
            K8::where('user_id', $user->id)->update([
                'penugasan' => $request->penugasank8,
                'jumlah_dilaksanakan' => $request->jumlah_dilaksanakank8,
                'jumlah_tdk' => $request->jumlah_tdkk8,
                'jumlah_jaga' => $request->jumlah_jagak8,
                'jumlah_kedelapan' => $request->jumlah_kedelapank8,
                'nakhir' => $request->nakhirk8,
                'n8' => $request->nk8
            ]);
        } else {
            K8::create([
                'user_id' => $user->id,
                'penugasan' => $request->penugasank8,
                'jumlah_dilaksanakan' => $request->jumlah_dilaksanakank8,
                'jumlah_tdk' => $request->jumlah_tdkk8,
                'jumlah_jaga' => $request->jumlah_jagak8,
                'jumlah_kedelapan' => $request->jumlah_kedelapank8,
                'nakhir' => $request->nakhirk8,
                'n8' => $request->nk8
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n8' => $request->nk8
                'n8' => $request->nakhirk8
            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n8' => $request->nk8
                'n8' => $request->nakhirk8
            ]);
        }


        //K9
        if (K9::where('user_id', $user->id)->exists()) {
            K9::where('user_id', $user->id)->update([
                'jumlah_penugasan' => $request->jumlah_penugasank9,
                'jumlah_realisasi' => $request->jumlah_realisasik9,
                'total_presen' => $request->presentasek9,
                'nakhir' => $request->nakhirk9,
                'n9' => $request->nk9
            ]);
        } else {
            K9::create([
                'user_id' => $user->id,
                'jumlah_penugasan' => $request->jumlah_penugasank9,
                'jumlah_realisasi' => $request->jumlah_realisasik9,
                'total_presen' => $request->presentasek9,
                'nakhir' => $request->nakhirk9,
                'n9' => $request->nk9
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n9' => $request->nk9
                'n9' => $request->nakhirk9
            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n9' => $request->nk9
                'n9' => $request->nakhirk9
            ]);
        }

        //K10
        if (K10::where('user_id', $user->id)->exists()) {
            K10::where('user_id', $user->id)->update([
                'jumlah_penelitian' => $request->jumlah_penelitiank10,
                'nakhir' => $request->nakhirk10,
                'n10' => $request->nk10
            ]);
        } else {
            K10::create([
                'user_id' => $user->id,
                'jumlah_penelitian' => $request->jumlah_penelitiank10,
                'nakhir' => $request->nakhirk10,
                'n10' => $request->nk10
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n10' => $request->nk10
                'n10' => $request->nakhirk10
            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n10' => $request->nk10
                'n10' => $request->nakhirk10
            ]);
        }

        //K11
        if (K11::where('user_id', $user->id)->exists()) {
            K11::where('user_id', $user->id)->update([
                'jumlah_karya' => $request->jumlah_karyak11,
                'nakhir' => $request->nakhirk11,
                'n11' => $request->nk11
            ]);
        } else {
            K11::create([
                'user_id' => $user->id,
                'jumlah_karya' => $request->jumlah_karyak11,
                'nakhir' => $request->nakhirk11,
                'n11' => $request->nk11
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n11' => $request->nk11
                'n11' => $request->nakhirk11

            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n11' => $request->nk11
                'n11' => $request->nakhirk11

            ]);
        }

        //K12
        if (K12::where('user_id', $user->id)->exists()) {
            K12::where('user_id', $user->id)->update([
                'tgl_masuk' => $request->tgl_masukk12,
                'waktu_masuk' => $request->waktu_masukk12,
                'waktu_keluar' => $request->waktu_keluark12,
                'waktu_masuk_bulat' => $request->masuk_bulatk12,
                'waktu_keluar_bulat' => $request->keluar_bulatk12,
                'waktu_total' => $request->waktu_totalk12,
                'jenis' => $request->jenisk12,
                'total_tm' => $request->total_tmk12,
                'nakhir' => $request->nakhirk12,
                'n12' => $request->nk12
            ]);
        } else {
            K12::create([
                'user_id' => $user->id,
                'tgl_masuk' => $request->tgl_masukk12,
                'waktu_masuk' => $request->waktu_masukk12,
                'waktu_keluar' => $request->waktu_keluark12,
                'waktu_masuk_bulat' => $request->masuk_bulatk12,
                'waktu_keluar_bulat' => $request->keluar_bulatk12,
                'waktu_total' => $request->waktu_totalk12,
                'jenis' => $request->jenisk12,
                'total_tm' => $request->total_tmk12,
                'nakhir' => $request->nakhirk12,
                'n12' => $request->nk12
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n12' => $request->nk12
                'n12' => $request->nakhirk12

            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n12' => $request->nk12
                'n12' => $request->nakhirk12

            ]);
        }

        //K13
        if (K13::where('user_id', $user->id)->exists()) {
            K13::where('user_id', $user->id)->update([
                'tgl_masuk' => $request->tgl_masukk13,
                'waktu_masuk' => $request->waktu_masukk13,
                'waktu_keluar' => $request->waktu_keluark13,
                'waktu_masuk_bulat' => $request->masuk_bulatk13,
                'waktu_keluar_bulat' => $request->keluar_bulatk13,
                'waktu_total' => $request->waktu_totalk13,
                'jenis' => $request->jenisk13,
                'total_tm' => $request->total_tmk13,
                'nakhir' => $request->nakhirk13,
                'n13' => $request->nk13
            ]);
        } else {
            K13::create([
                'user_id' => $user->id,
                'tgl_masuk' => $request->tgl_masukk13,
                'waktu_masuk' => $request->waktu_masukk13,
                'waktu_keluar' => $request->waktu_keluark13,
                'waktu_masuk_bulat' => $request->masuk_bulatk13,
                'waktu_keluar_bulat' => $request->keluar_bulatk13,
                'waktu_total' => $request->waktu_totalk13,
                'jenis' => $request->jenisk13,
                'total_tm' => $request->total_tmk13,
                'nakhir' => $request->nakhirk13,
                'n13' => $request->nk13
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n13' => $request->nk13
                'n13' => $request->nakhirk13

            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n13' => $request->nk13
                'n13' => $request->nakhirk13

            ]);
        }

        //K14
        if (K14::where('user_id', $user->id)->exists()) {
            K14::where('user_id', $user->id)->update([
                'total_pengurangan' => $request->total_pengurangank14,
                'nakhir' => $request->nakhirk14,
                'n14' => $request->nk14
            ]);
        } else {
            K14::create([
                'user_id' => $user->id,
                'total_pengurangan' => $request->total_pengurangank14,
                'nakhir' => $request->nakhirk14,
                'n14' => $request->nk14
            ]);
        }

        if (MasterNilai::where('user_id', $user->id)->exists()) {
            MasterNilai::where('user_id', $user->id)->update([
                // 'n14' => $request->nk14
                'n14' => $request->nakhirk14

            ]);
        } else {
            MasterNilai::create([
                'user_id' => $user->id,
                // 'n14' => $request->nk4
                'n14' => $request->nakhirk14

            ]);
        }

        $data =  MasterNilai::where('user_id', $user->id)->first();
        $n1 = (float)$data->n1;
        $n2 = (float)$data->n2;
        $n3 = (float)$data->n3;
        $n4 = (float)$data->n4;
        $n5 = (float)$data->n5;
        $n6 = (float)$data->n6;
        $n7 = (float)$data->n7;
        $n8 = (float)$data->n8;
        $n9 = (float)$data->n9;
        $n10 = (float)$data->n10;
        $n11 = (float)$data->n11;
        $n12 = (float)$data->n12;
        $n13 = (float)$data->n13;
        $n14 = (float)$data->n14;
        $jumlah1 = $n1 + $n2 + $n3 + $n4 + $n5 + $n6;
        $jumlah2 = $n7 + $n8 + $n9 + $n10 + $n11 + $n12 + $n13 + $n14;
        $jumlah = $jumlah1 + $jumlah2;
        $rata = $jumlah / 14;
        $rata = ((float) $rata - (int) $rata) == 0 ? (string) $rata : rtrim(sprintf("%.2f", $rata), "0");
        
        MasterNilai::where('user_id', $user->id)->update(['rata' => $rata]);

        $data1 = MasterNilai::orderBy('rata', 'DESC')->get();
        $no = 1;
        foreach($data1 as $h){
            MasterNilai::where('id', $h->id)->update(['rank' => $no]);
            $no++;
        }

        return back()->with('success', 'Data Berhasil Disimpan');


    }

    public function storeakhir(Request $request, Ambil $ambil)
    {
        //K2
        if (K2::where('ambil_id', $ambil->id)->exists()) {
            K2::where('ambil_id', $ambil->id)->update([
                'penyerahan' => $request->penyerahank2,
                'tgl_serah' => $request->tanggal_penyerahank2,
                'terlambat' => $request->terlambatk2,
                'total_serah' => $request->ketepatank2,
                'nakhir'=>$request->nakhirk2,
                'n2' => $request->nk2
            ]);
        } else {
            K2::create([
                'user_id' => $ambil->user_id,
                'ambil_id' => $ambil->id,
                'penyerahan' => $request->penyerahank2,
                'tgl_serah' => $request->tanggal_penyerahank2,
                'terlambat' => $request->terlambatk2,
                'total_serah' => $request->ketepatank2,
                'nakhir'=>$request->nakhirk2,
                'n2' => $request->nk2
            ]);
        }

        //K3
        if (K3::where('ambil_id', $ambil->id)->exists()) {
            K3::where('ambil_id', $ambil->id)->update([
                'tanggal_pertama' => $request->tanggal_penyerahank3,
                'tanggal_kedua' => $request->tanggal_uploadk3,
                'waktu_upload' => $request->waktu_uploadk3,
                'total_ketepatan' => $request->ketepatank3,
                'nakhir'=>$request->nakhirk3,
                'n3' => $request->nk3
            ]);
        } else {
            K3::create([
                'user_id' => $ambil->user_id,
                'ambil_id' => $ambil->id,
                'tanggal_pertama' => $request->tanggal_penyerahank3,
                'tanggal_kedua' => $request->tanggal_uploadk3,
                'waktu_upload' => $request->waktu_uploadk3,
                'total_ketepatan' => $request->ketepatank3,
                'nakhir'=>$request->nakhirk3,
                'n3' => $request->nk3
            ]);
        }

        //K4
        if (K4::where('ambil_id', $ambil->id)->exists()) {
            K4::where('ambil_id', $ambil->id)->update([
                'total_ajar' => $request->bahan_ajark4,
                'nakhir'=>$request->nakhirk4,
                'n4' => $request->nk4,
            ]);
        } else {
            K4::create([
                'user_id' => $ambil->user_id,
                'ambil_id' => $ambil->id,
                'total_ajar' => $request->bahan_ajark4,
                'nakhir'=>$request->nakhirk4,
                'n4' => $request->nk4,
            ]);
        }

        //K5
        if (K5::where('ambil_id', $ambil->id)->exists()) {
            K5::where('ambil_id', $ambil->id)->update([
                'total_kuis' => $request->total_quisk5,
                'total_rata' => $request->total_ratak5,
                'nakhir'=>$request->nakhirk5,
                'n5' => $request->nk5,
            ]);
        } else {
            K5::create([
                'user_id' => $ambil->user_id,
                'ambil_id' => $ambil->id,
                'total_kuis' => $request->total_quisk5,
                'total_rata' => $request->total_ratak5,
                'nakhir'=>$request->nakhirk5,
                'n5' => $request->nk5,
            ]);
        }

        //K6
        if (K6::where('ambil_id', $ambil->id)->exists()) {
            K6::where('ambil_id', $ambil->id)->update([
                'total_rencana' => $request->bahan_ajark6,
                'nakhir'=>$request->nakhirk6,
                'n6' => $request->nk6,
            ]);
        } else {
            K6::create([
                'user_id' => $ambil->user_id,
                'ambil_id' => $ambil->id,
                'total_rencana' => $request->bahan_ajark6,
                'nakhir'=>$request->nakhirk6,
                'n6' => $request->nk6,
            ]);
        }

        //menghitung n2-6 untuk master nilai
        //N2
        // $datak2 = K2::where('user_id', $ambil->user_id)->get();
        // $nk2 = [];
        // // dd($datak2);
        // foreach($datak2 as $dk2){
        //     $nk2[] = $dk2->n2;
        // }
        // $sk2 = 0;
        // for($i = 0; $i < count($nk2);$i++){
        //     $sk2+=$nk2[$i];
        // }
        // $hk2 = $sk2/count($datak2);
        if (MasterNilai::where('user_id', $ambil->user_id)->exists()) {
            
        } else {
            MasterNilai::create([
                'user_id' => $ambil->user_id,
            ]);
        }
        MasterNilai::where('user_id', $ambil->user_id)->update([
            // 'n2' => $hk2
            'n2' => $request->nakhirk2
        ]);
        
        //N3
        // $datak3 = K3::where('user_id', $ambil->user_id)->get();
        // $nk3 = [];
        // // dd($datak3);
        // foreach($datak3 as $dk3){
        //     $nk3[] = $dk3->n3;
        // }
        // $sk3 = 0;
        // for($i = 0; $i < count($nk3);$i++){
        //     $sk3+=$nk3[$i];
        // }
        // $hk3 = $sk3/count($datak3);
        MasterNilai::where('user_id', $ambil->user_id)->update([
            // 'n3' => $hk3
            'n3' => $request->nakhirk3
        ]);

        //N4
        // $datak4 = K4::where('user_id', $ambil->user_id)->get();
        // $nk4 = [];
        // // dd($datak4);
        // foreach($datak4 as $dk4){
        //     $nk4[] = $dk4->n4;
        // }
        // $sk4 = 0;
        // for($i = 0; $i < count($nk4);$i++){
        //     $sk4+=$nk4[$i];
        // }
        // $hk4 = $sk4/count($datak4);
        MasterNilai::where('user_id', $ambil->user_id)->update([
            // 'n4' => $hk4
            'n4' => $request->nakhirk4
        ]);

        //N5
        // $datak5 = K5::where('user_id', $ambil->user_id)->get();
        // $nk5 = [];
        // // dd($datak5);
        // foreach($datak5 as $dk5){
        //     $nk5[] = $dk5->n5;
        // }
        // $sk5 = 0;
        // for($i = 0; $i < count($nk5);$i++){
        //     $sk5+=$nk5[$i];
        // }
        // $hk5 = $sk5/count($datak5);
        MasterNilai::where('user_id', $ambil->user_id)->update([
            // 'n5' => $hk5
            'n5' => $request->nakhirk5
        ]);

        //N6
        // $datak6 = K6::where('user_id', $ambil->user_id)->get();
        // $nk6 = [];
        // // dd($datak6);
        // foreach($datak6 as $dk6){
        //     $nk6[] = $dk6->n6;
        // }
        // $sk6 = 0;
        // for($i = 0; $i < count($nk6);$i++){
        //     $sk6+=$nk6[$i];
        // }
        // $hk6 = $sk6/count($datak6);
        MasterNilai::where('user_id', $ambil->user_id)->update([
            // 'n6' => $hk6
            'n6' => $request->nakhirk6
        ]);

        $data =  MasterNilai::where('user_id', $ambil->user_id)->first();
        $n1 = (float)$data->n1;
        $n2 = (float)$data->n2;
        $n3 = (float)$data->n3;
        $n4 = (float)$data->n4;
        $n5 = (float)$data->n5;
        $n6 = (float)$data->n6;
        $n7 = (float)$data->n7;
        $n8 = (float)$data->n8;
        $n9 = (float)$data->n9;
        $n10 = (float)$data->n10;
        $n11 = (float)$data->n11;
        $n12 = (float)$data->n12;
        $n13 = (float)$data->n13;
        $n14 = (float)$data->n14;
        $jumlah1 = $n1 + $n2 + $n3 + $n4 + $n5 + $n6;
        $jumlah2 = $n7 + $n8 + $n9 + $n10 + $n11 + $n12 + $n13 + $n14;
        $jumlah = $jumlah1 + $jumlah2;
        if ($jumlah >= 3.25) {
            $ket = 'Sangat Baik';
        } else if ($jumlah >=2.75 && $jumlah < 3.24) {
            $ket = 'Baik';
        } else if ($jumlah >=2.25 && $jumlah < 2.74) {
            $ket = 'Cukup';
        } else if ($jumlah >=1.75 && $jumlah <2.24 ) {
            $ket = 'Kurang';
        } else if ($jumlah < 1.75){
            $ket = 'Sangat Kurang';
        }
        
        $rata = $jumlah / 14;
        $rata = ((float) $rata - (int) $rata) == 0 ? (string) $rata : rtrim(sprintf("%.2f", $rata), "0");
        
        MasterNilai::where('user_id', $ambil->user_id)->update(['rata' => $rata, 'keterangan' =>$ket]);
        
        return redirect('/input-nilai/'. $ambil->user_id .'/pilih-matkul')->with('success', 'Data Berhasil Disimpan');
    }

    public function hitungrata($id)
    {
       $data =  MasterNilai::where('user_id', $id)->first();
       $n1 = $data->n1;
       $n2 = $data->n2;
       $n3 = $data->n3;
       $n4 = $data->n4;
       $n5 = $data->n5;
       $n6 = $data->n6;
        $n7 = $data->n7;
        $n8 = $data->n8;
        $n9 = $data->n9;
        $n10 = $data->n10;
        $n11 = $data->n11;
        $n12 = $data->n12;
        $n13 = $data->n13;
        $n14 = $data->n14;
        $jumlah1 = $n1 + $n2 + $n3 + $n4 + $n5 + $n6;
        $jumlah2 = $n7 + $n8 + $n9 + $n10 + $n11 + $n12 + $n13 + $n14;
        $jumlah = $jumlah1 + $jumlah2;
        return $jumlah/14;

    }
//CSVIMPORT
}
