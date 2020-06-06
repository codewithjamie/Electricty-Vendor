<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Deposit;
use App\User;
use Illuminate\Support\Facades\DB;

class DepositController extends Controller
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
        return view('/dashboard/pages/deposit');
    } 
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ],[           
            'amount.required' => 'Enter amount to deposit ',
        ]);        

        $id = auth()->user()->id;

        $userid = User::findorFail($id);

        $balance = DB::table('deposits')
                   ->where('email', '=', request()->input('email'))
                   ->sum('amount');
        
        $finalbalance = $balance + request()->input('amount');

        $postdepo = Deposit::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'accountno' => $request->accountno,
                        'transid' => $request->transid,
                        'amount' => $request->amount,
                        'status' => 'success',
                    ]);

        Alert::toast('Great! Your deposit was successful ', 'success');
        return redirect()->back();
    }

    public function list()
    {
        $deposits = Deposit::all();

        return view('dashboard/pages/deposits/deposits-list', compact('deposits'));
    }
}
