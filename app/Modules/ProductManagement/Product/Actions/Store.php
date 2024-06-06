<?php

namespace App\Modules\ProductManagement\Product\Actions;

class Store
{
    static $model = \App\Modules\ProductManagement\Product\Models\Model::class;

    public static function execute($request)
    {
        try {
            $requestData = $request->validated();
            $product_categories = $requestData['product_categories'];
            $product_images = $requestData['product_images'];
            unset($requestData['product_categories']);
            unset($requestData['product_images']);

            if ($product = self::$model::query()->create($requestData)) {

                $product->product_categories()->attach($product_categories);

                $product->product_images()->attach($product_images);

                return messageResponse('Item added successfully', $product, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
