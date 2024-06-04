<?php

namespace App\Modules\LocationManagement\Thana\Actions;

class Import
{
    static $model = \App\Modules\LocationManagement\Thana\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "country_id" => $row['country_id'],

                    "district_id" => $row['district_id'],

                    "name" => $row['name'],

                    "post_office" => $row['post_office'],

                    "post_code" => $row['post_code'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}