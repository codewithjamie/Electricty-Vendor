<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ActionController extends Controller
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
    public function store(Request $request)
    {
        
        $request->validate([
            'accountno' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',
        ]);

        $data = DB::table('users')
        ->where('id', '=', auth()->user()->id)
        ->update([
            'accountno'=> $request->accountno,
            'fname'=> $request->fname,
            'lname'=> $request->lname,
            'email'=> $request->email,
            'gender'=> $request->gender,
            'city'=> $request->city,
            'state'=> $request->state,
            'country'=> $request->country,
            'address'=> $request->address,
        ]);
        Alert::toast('Great! Account successfully updated ', 'success');
        return redirect('/dashboard/profile');
    }
}
