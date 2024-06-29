<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\ProductManagement\ProductCategory\Models\Model as Category;
use App\Modules\ProductManagement\ProductBrand\Models\Model as Brand;
use App\Modules\ProductManagement\ProductVarient\Models\Model as ProductVarient;
use App\Modules\ProductManagement\ProductVarientValue\Models\Model as ProductVarientValue;

class CategoryController extends Controller
{
    public function featured()
    {
        $data = Category::where('is_nav', 1)
            ->select([
                'id', 'is_nav', 'is_featured', 'title',
                'serial', 'image', 'slug'
            ])
            ->where('status', 'active')
            ->orderBy('serial', 'ASC')
            ->get();
        return response()->json($data);
    }

    public function brands()
    {
        $data = Brand::select([
            'id', 'title', 'image'
        ])
            ->where('status', 'active')
            ->orderBy('serial', 'ASC')
            ->limit(10)
            ->get();
        return response()->json($data);
    }

    public function varients()
    {
        $data = ProductVarient::select([
            'id', 'title',
        ])->get()->map(function ($i) {
            $i->values = ProductVarientValue::where('product_varient_id', $i->id)
                ->select('id', 'product_varient_id', 'title')->get();
            return $i;
        });
        return response()->json($data);
    }

    public function category($slug)
    {
        $data = Category::where('slug',$slug)->first();
        $products = $data->products()->with('product_image')->limit(30)->get();

        return response()->json([
            "data" => $data,
            "products" => $products,
        ]);
    }
}
