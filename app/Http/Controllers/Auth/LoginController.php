<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {       
        // $id = DB::table('users')->pluck('id');
        $data = DB::table('users')
            ->where('email', '=', request()->input('email'))
            ->update([
                'login_time' => Carbon::now(),
            ]);

        $id = DB::table('users')
            ->where('email', '=', request()->input('email'))
            ->pluck('userid')
            ->first();

        $ip_address = \Request::getClientIp(true);


        $data = DB::table('activity_loggers')->insert([
            'email' => request()->input('email'),
            'userid' => $id,
            'login_time' => Carbon::now()->toDateTimeString(),
            'login_ip' => \Request::getClientIp(true),
        ]);
    }
}
