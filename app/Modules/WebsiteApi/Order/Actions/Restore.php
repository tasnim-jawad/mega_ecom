<?php

namespace App\Modules\WebsiteApi\Order\Actions;

class Restore
{
    static $model = \App\Modules\WebsiteApi\Order\Models\Model::class;

    public static function execute()
    {
        try {
            if (!$data = self::$model::where('slug', request()->slug)->first()) {
                return messageResponse('Data not found...', $data, 404, 'error');
            }
            $data->status = 'active';
            $data->update();
            return messageResponse('Item Successfully  Restored', $data, 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}