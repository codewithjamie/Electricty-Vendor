<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications =  Notification::paginate(10);

        return view('dashboard/pages/notifications/all', compact('notifications'));
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
            'title' => 'required',
            'content' => 'required',
            'type' => 'required',
        ]);

        Notification::create([
            'userid' => auth()->user()->userid,
            'email' => auth()->user()->email,
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
        ]);
            
        Alert::toast('Great! Disco successfully created ', 'success');
        return redirect('/dashboard/notifications/all');
    }
        
        /**
         * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Notification = Notification::findorFail($id);
        
        return view('dashboard/pages/notification/edit-disco', compact('Notification'));
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
        $data = DB::table('notifications')
        ->where('id', '=', $id)
            ->update([
                'userid' => auth()->user()->userid,
                'email' => auth()->user()->email,
                'title' => $request->title,
                'content' => $request->content,
                'type' => $request->type,
            ]);
        Alert::toast('Great! Notification successfully updated ', 'success');
        return redirect('/dashboard/notifications/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('notifications')
            ->where('id', '=', $id)
            ->delete();
        Alert::toast('Great! Notification successfully deleted ', 'success');
        return redirect('/dashboard/notifications/all');
    }
}
