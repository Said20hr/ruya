<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //

    public function visuals()
    {
        $projects = [];
        $category = Service::where('slug','visuals')->first();
        if ($category)
        {
            $projects = Portfolio::where('category_id',$category->id)->get();
        }
        return view('public.visuals',compact('projects'));
    }
    public function dev()
    {
        $projects = [];
        $category = Service::where('slug','dev')->first();
        if ($category)
        {
            $projects = Portfolio::where('category_id',$category->id)->get();
        }
        return view('public.dev',compact('projects'));
    }
    public function motion()
    {
        $projects = [];
        $category = Service::where('slug','motion')->first();
        if ($category)
        {
            $projects = Portfolio::where('category_id',$category->id)->get();
        }
        return view('public.motion',compact('projects'));
    }
    public function portfolio($slug)
    {
        $project = Portfolio::where('slug',$slug)->first();
        return view('public.case-study',compact('project'));
    }

}
