<?php

namespace App\Modules\LocationManageemnt\StateDivision\Actions;

use App\Modules\LocationManageemnt\StateDivision\Validations\Validation;


class Store
{
    static $model = \App\Modules\LocationManageemnt\StateDivision\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {
            $requestData = $request->validated();
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}