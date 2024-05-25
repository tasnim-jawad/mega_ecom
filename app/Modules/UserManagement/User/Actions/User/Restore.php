<?php

namespace App\Modules\UserManagement\User\Actions\User;

class Restore
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;
    public static function execute()
    {

        try {
            if (!$data = self::$model::withTrashed()->where('slug', request()->slug)) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $data->restore();
            return messageResponse('Item Successfully Restored', 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
