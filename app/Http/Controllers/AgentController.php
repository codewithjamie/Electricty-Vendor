<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Agent;
use App\User;
use Illuminate\Auth\Events\Verified;

class AgentController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agents = User::where('userid', '>', 2)->paginate(25);        
        return view('/dashboard/pages/agents/all-agents', compact('agents'));
    } 
    public function fetchActiveAgent()
    {
        $activeAgents = User::where('email_verified_at', '!=', null)->where('userid', '>', 2)->paginate(25);        
        
        return view('/dashboard/pages/agents/active-agents', compact('activeAgents'));
    }
    public function fetchInactiveAgent()
    {
        $InactiveAgents = User::where('email_verified_at', '==', null)->where('userid', '>', 2)->paginate(25);        

        return view('/dashboard/pages/agents/inactive-agents', compact('InactiveAgents'));
    }

    public function viewAgent($id)
    {
        $data = Agent::findorFail($id);

        return view('dashboard/pages/agents/view-agent', compact('data'));
    }
}