<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

}
