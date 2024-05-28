<?php

namespace App\Modules\LocationManageemnt\Thana\Actions;

use App\Modules\LocationManageemnt\Thana\Validations\Validation;

class Update
{
    static $model = \App\Modules\LocationManageemnt\Thana\Models\Model::class;

    public static function execute(Validation $request,$id)
    {
        try {
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $requestData = $request->validated();
            $data->update($requestData);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}