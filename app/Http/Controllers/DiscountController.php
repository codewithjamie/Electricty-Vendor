<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::latest()->paginate(5);

        return view('dashboard/pages/discounts/all', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/pages/discounts/create');
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
            'product' => 'required',
            'percentage' => 'required',
            'status' => 'required',
        ]);

        $data = DB::table('discounts')
                    ->insert([
                        'product'=> $request->product   ,
                        'percentage'=> $request->percentage,
                        'status'=> $request->status,
                    ]);
        Alert::toast('Great! Discount successfully created ', 'success');
        return redirect('/dashboard/discounts');    
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discounts = Discount::findorFail($id);

        return view('dashboard/pages/discounts/edit', compact('discounts'));
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
            'product' => 'required',
            'percentage' => 'required',
            'status' => 'required',
        ]);

        $data = DB::table('discounts')
                    ->where('id', '=', $id)
                    ->update([
                        'product'=> $request->product,
                        'percentage'=> $request->percentage,
                        'status'=> $request->status,
                    ]);
        Alert::toast('Great! Discount successfully updated ', 'success');
        return redirect('/dashboard/discounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('discounts')
                    ->where('id', '=', $id)
                    ->delete();
        Alert::toast('Great! Discount successfully deleted ', 'success');
        return redirect('/dashboard/discounts');
    }
}
