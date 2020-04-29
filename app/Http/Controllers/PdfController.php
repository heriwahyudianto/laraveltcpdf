<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Elibyy\TCPDF\Facades\TCPDF;

class PdfController extends Controller
{
    public function index()
    {
        $html = '<div style="text-align:right;"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br />
        <img src="img.svg" alt="test alt attribute" width="100" height="100" border="0" />
        </div>';
        $pdf = new TCPDF();
        $pdf::SetTitle('Image');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');
        $pdf::AddPage();
        $html = '<div style="text-align:center;"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br /><br />
        <img src="free.png" alt="test alt attribute" width="100" height="100" border="0" />
        </div>';
        $pdf::writeHTML($html, true, false, true, false, '');
        $pdf::Output('image.pdf');
    }

    
}
