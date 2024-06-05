<?php

namespace App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions;

class Store
{
    static $model = \App\Modules\SalesManagement\SalesQuotationOrderDetails\Models\Model::class;

    public static function execute($request)
    {
        try {
            $requestData = $request->validated();
            if ($data = self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', $data, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}