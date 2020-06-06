<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function LogoutLink()
    {        
        Alert::toast('You have successfully logged out', 'success');
        // Session::flush();
        Auth::logout();
        return view('/auth/logout');
    }

    public function About()
    {
        return view('about');
    }
    public function Contact()
    {
        return view('contact');
    }
    public function Help()
    {
        return view('help');
    }
    public function faq()
    {
        return view('faqs');
    }
}
