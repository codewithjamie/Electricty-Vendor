<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discos;
use App\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;


class DiscosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discos =  Discos::paginate(10);

        return view('dashboard/pages/discos/all', compact('discos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/pages/discos/new-discos');
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
            'slug' => 'required',
            'locations' => 'required',
            'description' => 'required',
            'image' => 'required | max:1000'
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        
        Discos::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $imagePath,
            'locations' => json_encode($request->locations),
            'commission' => $request->commission,
            'discount' => $request->discount,
            'posted-by' => auth()->user()->fname . "  " . auth()->user()->lname,
            ]);
            
            Alert::toast('Great! Disco successfully created ', 'success');
            return redirect('/dashboard/discos/create-disco');
        }
        
        /**
         * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discos = Discos::findorFail($id);
        
        return view('dashboard/pages/discos/edit-disco', compact('discos'));
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
        $data = DB::table('discos')
        ->where('id', '=', $id)
            ->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'commission' => $request->commission,
                'discount' => $request->discount,
                'posted-by' => auth()->user()->fname . " " . auth()->user()->lname,
            ]);
        Alert::toast('Great! Disco successfully updated ', 'success');
        return redirect('/dashboard/discos/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('discos')
            ->where('id', '=', $id)
            ->delete();
        Alert::toast('Great! Disco successfully deleted ', 'success');
        return redirect('/dashboard/discos/all');
    }
}
