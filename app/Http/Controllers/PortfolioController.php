<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //

    public function visuals()
    {
        return view('public.visuals');
    }
    public function dev()
    {
        return view('public.dev');
    }
    public function motion()
    {
        return view('public.motion');
    }
    public function devPortfolio($slug)
    {
        return view('public.case-study');
    }
    public function motionPortfolio($slug)
    {
        return view('public.case-study');
    }
}
