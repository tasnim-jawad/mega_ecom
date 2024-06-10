<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\ProductManagement\ProductVarient\Models\Model as ProductVarient;
use App\Modules\ProductManagement\ProductVarientValue\Models\Model as ProductVarientValue;

class TestController extends Controller
{
    public function uploads_variant()
    {
        $varients = [
            "size" => ['xs', 'sm', 'md', 'lg', 'xl', 'xxl', 'xxxl', '4xl', '5xl', '6xl'],
            "material" => ['cotton', 'polyester', 'wool', 'silk', 'linen'],
            "pattern" => ['solid', 'striped', 'checked', 'printed', 'dotted'],
            "brand" => ['brandA', 'brandB', 'brandC', 'brandD', 'brandE'],
            "color" => ['black', 'white', 'silver', 'gold', 'blue', 'red', 'green', 'purple', 'gray', 'pink'],
            "storage" => ['64GB', '128GB', '256GB', '512GB', '1TB', '2TB'],
            "screen_size" => ['5.5"', '6.1"', '6.5"', '6.7"', '7"', '7.5"', '8"', '10"', '12"', '13.3"', '15.6"', '17.3"'],
            "battery" => ['3000mAh', '4000mAh', '4500mAh', '5000mAh', '6000mAh'],
            "resolution" => ['720p', '1080p', '1440p', '4K', '8K'],
            "os" => ['Android', 'iOS', 'Windows', 'MacOS', 'Linux'],
        ];

        ProductVarient::truncate();
        ProductVarientValue::truncate();
        foreach ($varients as $key => $values) {
            $varient = ProductVarient::create([
                "title" => $key,
            ]);
            foreach ($values as $value) {
                $varient_value = ProductVarientValue::create([
                    "title" => $value,
                    "product_varient_id" => $varient->id,
                ]);
            }
        }
    }
}
