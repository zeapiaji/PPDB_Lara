<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MPController extends Controller
{
    public function index(){
        return view('index');
    }
}
