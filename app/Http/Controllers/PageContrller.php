<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class PageContrller extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function download()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/files/alia-cv.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response()->download($file, 'alia-cv.pdf', $headers);
    }
}
