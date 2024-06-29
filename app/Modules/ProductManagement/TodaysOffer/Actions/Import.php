<?php

namespace App\Modules\ProductManagement\TodaysOffer\Actions;

class Import
{
    static $model = \App\Modules\ProductManagement\TodaysOffer\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "product_id" => $row['product_id'],

                    "title" => $row['title'],

                    "discount_type" => $row['discount_type'],

                    "discount" => $row['discount'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}