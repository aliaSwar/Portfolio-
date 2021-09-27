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
}
