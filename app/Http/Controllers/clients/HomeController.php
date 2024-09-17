<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        $bannerAds=Advertisement::where('position','banner')->inRandomOrder()->first();
        // dd($bannerAds);
        $sidebarAds=Advertisement::where('position','sidebar')->inRandomOrder()->first();
        return view('clients/home',compact('sidebarAds','bannerAds'));
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
