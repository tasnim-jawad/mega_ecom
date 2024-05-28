<?php

namespace App\Modules\LocationManageemnt\City\Actions;

use App\Modules\LocationManageemnt\City\Validations\Validation;


class Store
{
    static $model = \App\Modules\LocationManageemnt\City\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {
            dd($request->all());
            $requestData = $request->validated();
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
