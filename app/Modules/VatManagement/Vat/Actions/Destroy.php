<?php

namespace App\Modules\VatManagement\Vat\Actions;

class Destroy
{
    static $model = \App\Modules\VatManagement\Vat\Models\Model::class;

    public static function execute($slug)
    {
        try {
            if (!$data=self::$model::where('slug', $slug)->first()) {
                return messageResponse('Data not found...',$data, 404, 'error');
            }
            $data->delete();
            return messageResponse('Item Successfully deleted',[], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
