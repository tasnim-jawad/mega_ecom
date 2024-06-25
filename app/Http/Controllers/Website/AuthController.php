<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function __construct()
    {
    }
    public function login()
    {
        session()->put('prev_url', url()->previous());
        return Inertia::render('Auth/Login', [
            'event' => [
                'title' => 'ETEK Login',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }

    public function login_submit()
    {
        $this->validate(request(), [
            "email" => ['required', 'exists:users,email'],
            "password" => ['required'],
        ]);

        $user = User::whereAny(['user_name', 'email', 'phone_number'], request()->email)->first();

        $check_pass = Hash::check(request()->password, $user->password);
        if (!$check_pass) {
            return redirect()->back()->withErrors(["password"=>"incorrect password"]);
        }

        auth()->login($user);
        return redirect()->route('website_profile')->with('auth',auth()->user());

    }
}
