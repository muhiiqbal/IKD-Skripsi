<?php

namespace App\Http\Controllers;

use App\Imports\csvImport;
use App\Models\MasterNilai;
use Illuminate\Http\Request;
use App\Models\csvimpotmodel;
use App\Http\Services\KnnPrediction;
use Maatwebsite\Excel\Facades\Excel;
use Rubix\ML\CrossValidation\Reports\MulticlassBreakdown;

class KnnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $master = MasterNilai::with('user')->get();
        $csv = csvimpotmodel::all();

        return view('knn-nilai', ['master' => $master], ['csv'=>$csv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function import()
    {
        Excel::import(new csvImport, request()->file('file'));

        return redirect()->back();

        
    }
    public function prediksi(Request $request)
    {
        //knnresult
        $datatest = MasterNilai::all();
        $report = new MulticlassBreakdown();
        $arr_knn = [];

        foreach ($datatest as $d) {
            array_push($arr_knn, $d->n1, $d->n2, $d->n3, $d->n4, $d->n5, $d->n6, 
            $d->n7, $d->n8, $d->n9, $d->n10, $d->n11, $d->n12, $d->n13, $d->n14);
            $knnresult = (new KnnPrediction('data.csv', [$arr_knn]))->predikresult();
            $results = $report->generate($knnresult, $knnresult);
            MasterNilai::where('id', $d->id)->update([
                'keterangan' => $knnresult[0],
                'accuracy' => $results['overall']['accuracy'],
                'recall' => $results['overall']['recall'],
                'precision' => $results['overall']['precision'],
            ]);
            $arr_knn = [];
            // $report->generate($knnresult, $knnresult)->toJSON()->saveTo(new Filesystem('error.report'));
            // $results->toJSON()->saveTo(new Filesystem('error.report'));
            // dd($results['overall']);


            // $results = $report->generate($knnresult, $knnresult);
            // $results->toJSON()->saveTo(new Filesystem('error.report'));
        }



        return back();
    }
public function knnresult(MasterNilai $master)
    {
        return view('knn-nilai', ['master' => MasterNilai::where('id', $master->id)->with('user')->get()]);
    }
}
