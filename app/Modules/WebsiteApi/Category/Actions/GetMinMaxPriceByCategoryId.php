<?php

namespace App\Modules\WebsiteApi\Category\Actions;

use Illuminate\Support\Facades\DB;

class GetMinMaxPriceByCategoryId
{
    static $CategoryModel = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    static $ProductModel = \App\Modules\ProductManagement\Product\Models\Model::class;


    public static function execute($slug)
    {
        try {

            $Category = self::$CategoryModel::where('slug', $slug)->first();
            if (!$Category) {
                return messageResponse('Data not found...', $slug, 404, 'error');
            }


            $minPrice = self::$ProductModel::query()
                ->whereHas('product_categories', function ($query) use ($Category) {
                    $query->where('product_category_id', $Category->id);
                })
                ->min('customer_sales_price');

            $maxPrice = self::$ProductModel::query()
                ->whereHas('product_categories', function ($query) use ($Category) {
                    $query->where('product_category_id', $Category->id);
                })
                ->max('customer_sales_price');

            $data = [
                'min_price' => $minPrice,
                'max_price' => $maxPrice,
            ];

            return entityResponse($data);
            
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
