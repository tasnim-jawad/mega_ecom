<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\ProductManagement\Product\Models\Model as Product;
class ProductController extends Controller
{
    public function featured_products()
    {
        $data = Product::where('is_featured', 1)->with('product_image')->get();
        return $data;
    }
}
