<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commissions;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commissions = Commissions::latest()->paginate(5);

        return view('dashboard/pages/commissions/all', compact('commissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard/pages/commissions/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required',
            'status' => 'required',
        ]);

        $data = DB::table('commissions')
                    ->insert([
                        'name'=> $request->name,
                        'percentage'=> $request->percentage,
                        'status'=> $request->status,
                    ]);
        Alert::toast('Great! Commission successfully created ', 'success');
        return redirect('/dashboard/commissions');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commissions = Commissions::findorFail($id);

        return view('dashboard/pages/commissions/edit', compact('commissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required',
            'status' => 'required',
        ]);

        $data = DB::table('commissions')
                    ->where('id', '=', $id)
                    ->update([
                        'name'=> $request->name,
                        'percentage'=> $request->percentage,
                        'status'=> $request->status,
                    ]);
        Alert::toast('Great! Commission successfully updated ', 'success');
        return redirect('/dashboard/commissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('commissions')
                    ->where('id', '=', $id)
                    ->delete();
        Alert::toast('Great! Commission successfully deleted ', 'success');
        return redirect('/dashboard/commissions');
    }
}
