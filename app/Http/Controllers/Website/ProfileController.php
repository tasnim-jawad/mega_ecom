<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfileController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function profile()
    {
        return Inertia::render('Profile/Index', [
            'event' => [
                'title' => 'Profile',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
    public function orders()
    {
        return Inertia::render('Profile/pages/Orders', [
            'event' => [
                'title' => 'Order History',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
    public function wish_list()
    {
        return Inertia::render('Profile/pages/Wishlist', [
            'event' => [
                'title' => 'Wish List',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
    public function account()
    {
        return Inertia::render('Profile/pages/Account', [
            'event' => [
                'title' => 'Account Information',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
    public function address()
    {
        return Inertia::render('Profile/pages/Address', [
            'event' => [
                'title' => 'Order Address',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
    public function password()
    {
        return Inertia::render('Profile/pages/Password', [
            'event' => [
                'title' => 'Change Password',
                'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
}
