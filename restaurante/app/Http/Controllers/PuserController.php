<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuserController extends Controller
{
    //
    public function index()
    {
        return view('puser-func.show');
    }
}
