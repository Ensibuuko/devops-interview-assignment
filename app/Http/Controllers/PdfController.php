<?php

namespace App\Http\Controllers;

use PDF; 
use Illuminate\Http\Response;

class PdfController extends Controller
{
    // ! Ignore this file/code

    // public function viewPdfs() {
    //     return view('view-pdfs');
    // }

    // /**
    //  * Uses the composer package 'Snappy' to generate a PDF
    //  * from some HTML code. 
    //  * 
    //  * See https://github.com/barryvdh/laravel-snappy#wkhtmltopdf-installation
    //  * for a crucial dependency. 
    //  *
    //  * @return void
    //  */
    // public function downloadPdf()
    // {
    //     $html = '<h1>Invoice</h1><p>Hello world.</p><p>Success!</p>';
    //     return new Response(
    //         PDF::getOutputFromHtml($html),
    //         200,
    //         array(
    //             'Content-Type'          => 'application/pdf',
    //             'Content-Disposition'   => 'attachment; filename="proof-of-concept.pdf"'
    //         )
    //     );
    // }

    // Could be loaded from... 
    // Route::get('/view-pdfs', 'PdfController@viewPdfs');
    // Route::get('/download-pdf', 'PdfController@downloadPdf');
}
