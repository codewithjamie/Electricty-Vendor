<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityLogger;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activitylogs = ActivityLogger::paginate(25);

        return view('/dashboard/pages/settings/logs', compact('activitylogs'));
    }
}
