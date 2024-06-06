<?php

namespace App\Modules\PurchageManagement\PurchaseOrder\Actions;

class SoftDelete
{
    static $model = \App\Modules\PurchageManagement\PurchaseOrder\Models\Model::class;

    public static function execute()
    {
        try {
            if (!$data = self::$model::where('slug', request()->slug)->first()) {
                return messageResponse('Data not found...', $data, 404, 'error');
            }
            $data->status = 'inactive';
            $data->update();
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
