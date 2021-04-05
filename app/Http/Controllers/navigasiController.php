<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navigasiController extends Controller
{
    function index(){
        return view('/layouts/main');
    }
}
