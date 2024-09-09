<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        return view('clients/home');
    }
    function contact() {
        return view('clients/contact');
    }
    function faq() {
        return view('clients/faq');
    }
    function feedback() {
        return view('clients/feedback');
    }
}
