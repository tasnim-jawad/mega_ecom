<?php

namespace App\Modules\WebsiteApi\Product\Actions;

class GetProductDetails
{
    static $ProductModel = \App\Modules\ProductManagement\Product\Models\Model::class;

    public static function execute($slug)
    {
        try {
            $with = ['product_images:id,product_id,url', 'product_categories:id,title', 'product_brand:id,title'];
            $fields = request()->input('fields') ?? ['*'];
            if (empty($fields)) {
                $fields = ['*'];
            }
            if (!$data = self::$ProductModel::query()->with($with)->select($fields)->where('slug', $slug)->first()) {
                return messageResponse('Data not found...', $data, 404, 'error');
            }
            return entityResponse($data);
        } catch (\Exception $e) {

            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
