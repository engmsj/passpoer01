<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }
    public function kalaed()
    {
        return view('front.kalaed');
    }
    public function reason()
    {
        return view('front.reason');
    }
    public function report()
    {
        return view('front.report');
    }
    public function travel()
    {
        return view('front.travel');
    }
}
