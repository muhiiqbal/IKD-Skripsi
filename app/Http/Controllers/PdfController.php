<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\MasterNilai;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    public function showmaster(){
        $master = MasterNilai::all();
        return view('pages.pdf');
      }
      // Generate PDF
      public function createPDF() {
        // retreive all records from db
        $data = MasterNilai::all();
        // share data to view
        view()->share('master',$data);
        
        $pdf = PDF::loadView('pages.pdf', $data);
        // download PDF file with download method
        
        return $pdf->download('Detail.pdf');
      }
}
