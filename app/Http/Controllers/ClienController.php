<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienController extends Controller
{
    public function dashboard(){
        return view('clients.dashboard');
    }
}
