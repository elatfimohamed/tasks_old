<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

class LoginAltController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @test
     */
    public function  can_login_user(Request $request)
    {
        // TODO -> VALIDATE
    }
    public function  login(Request $request)
    {
        // TODO -> VALIDATE


        $user = User::where('email', $request->email)->first();

        if (!$user) return redirect('/');
        if (!Hash::check())
    }
}
