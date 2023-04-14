<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index()
    {
        return view('public.homePage');
    }

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
    public function animation()
    {
        $projects = [];
        $category = Service::where('slug','3d')->first();
        if ($category)
        {
            $projects = Portfolio::where('category_id',$category->id)->get();
        }
        return view('public.animation',compact('projects'));
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
            $projects = Portfolio::where('category_id',$category->id)->orderBy('created_at','desc')->get();
        }
        return view('public.motion',compact('projects'));
    }
    public function portfolio($locale, $slug)
    {
        $project = Portfolio::where('slug', $slug)->firstOrFail();
        return view('public.case-study',compact('project'));
    }

    public function message()
    {
        $message = Contact::inRandomOrder()->take(1)->first();
        return view('emails.message',compact('message'));
    }

}
