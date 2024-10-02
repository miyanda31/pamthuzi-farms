<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $banners = Banner::whereSite('Pamthuzi Livestock')->take(5)->latest()->get();
        return view('welcome',compact('banners'));
    }


    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }


}
