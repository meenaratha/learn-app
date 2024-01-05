<?php

namespace App\Http\Controllers\frontend\download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function download(){
       // Your PDF generation logic goes here
       $pdf = PDF::loadView('pdf.template'); // Use your own PDF generation logic

       return $pdf->download('pdf.poster.pdf');
    }
}
