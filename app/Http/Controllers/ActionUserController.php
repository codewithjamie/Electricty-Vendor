<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\DB;

class ActionUserController extends Controller
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
        $users = User::where('userid', '>', 1)->paginate(25);        
        return view('/dashboard/pages/users/all-users', compact('users'));
    } 
    public function fetchActiveUsers()
    {
        $activeUsers = User::where('email_verified_at', '!=', null)->where('userid', '>', 1)->paginate(25);        
        
        return view('/dashboard/pages/users/active-users', compact('activeUsers'));
    }
    public function fetchInactiveUsers()
    {
        $activeUsers = User::where('email_verified_at', '==', null)->where('userid', '>', 1)->paginate(25);        

        return view('/dashboard/pages/users/inactive-users', compact('activeUsers'));
    }

    public function viewUser($id)
    {
        $data = User::findorFail($id);

        return view('dashboard/pages/users/view-user', compact('data'));
    }
    public function UserLog($email)
    {
        $data = DB::table('activity_loggers')
                    ->where('email', '=', $email)
                    ->get();

        return view('dashboard/pages/users/user-logs', compact('data'));
    }
    public function Fundme($email)
    {
        $data = User::findorFail($email);

        $x = 12;
        $randomNum=substr(str_shuffle("0123456789ABCDEFGHIJKLMNO123456PQRSTVWXYZ0123456789"), 0, $x);


        return view('dashboard/pages/users/fund-wallet', compact('data', 'randomNum'));
    }
    public function FundUser()
    {
        $x = 12;
        $randomNum=substr(str_shuffle("0123456789ABCDEFGHIJKLMNO123456PQRSTVWXYZ0123456789"), 0, $x);

        return view('dashboard/pages/users/fund-account', compact('randomNum'));
    }
}