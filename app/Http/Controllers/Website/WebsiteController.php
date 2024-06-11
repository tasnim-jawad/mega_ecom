<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WebsiteController extends Controller
{
    public function home()
    {
        return Inertia::render('Home/Index', [
            'event' => [
                'title' => 'ETEK Enterprise',
                'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }

    public function blogs()
    {
        return Inertia::render('Blogs/Index', [
            'event' => [
                'title' => 'ETEK Blogs',
                'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }

    public function products($slug)
    {
        return Inertia::render('Products/Index', [
            'slug' => $slug,
            'event' => [
                'title' => 'ETEK Blogs',
                'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }

    public function products_details()
    {
        return Inertia::render('Products/ProductDetails', [
            'event' => [
                'title' => 'ETEK Product Details',
                'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }

    public function cart()
    {
        return Inertia::render('Cart/Index', [
            'event' => [
                'title' => 'ETEK Cart',
                'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }

    public function checkout()
    {
        return Inertia::render('Checkout/Index', [
            'event' => [
                'title' => 'ETEK Checkout',
                'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
                'description' => 'Best eCommerce in bangladesh'
            ]
        ]);
    }
}
