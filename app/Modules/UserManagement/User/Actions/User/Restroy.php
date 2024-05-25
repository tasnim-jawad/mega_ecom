<?php

namespace App\Modules\UserManagement\User\Actions\User;

class Restroy
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;

    public static function execute()
    {
        try {
            if (!$data = self::$model::where('slug',request()->slug)) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $data->forceDelete();
            return messageResponse('Item Successfully deleted', 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
