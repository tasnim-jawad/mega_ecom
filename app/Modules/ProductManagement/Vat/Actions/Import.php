<?php

namespace App\Modules\ProductManagement\Vat\Actions;

class Import
{
    static $model = \App\Modules\ProductManagement\Vat\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "title" => $row['title'],

                    "rate_parcent" => $row['rate_parcent'],

                ]);
            }
            return messageResponse('Item Successfully soft deleted', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}