<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WashController extends Controller
{
    public function wash(){
        return view('Wash.Wash');
    }
}
