<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;

class AgentUsrController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['verified']);
    }


    public function pow()
    {         
        return view('/dashboard/pages/buy-power');
    }  
    public function index()
    {         
        return view('/dashboard/agent/index');
    }  



}
