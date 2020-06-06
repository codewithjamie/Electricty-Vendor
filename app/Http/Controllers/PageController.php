<?php

namespace App\Http\Controllers;

use App\Discos;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Event;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home()
    {
        $pages = Discos::all();

        return view('welcome', compact('pages'));
    }
    // Tell laravel to retrieve the model by the $slug instead of the default $id
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function fetch($slug)
    {
        $disco_path = Discos::where('slug', '=', $slug)->first();
        // would use app/posts/show.blade.php
        return view('discos', compact('disco_path'));
    }
}
