<?php

namespace App\Modules\UserManagement\User\Actions\Employee;



class Show
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;

    public static function execute($slug)
    {
        try {
            $with = ['user_address', 'user_address_contact_person', 'user_employee_information'];
            $fields = request()->fields ?? ["*"];
            if (!$data = self::$model::query()->with($with)->select($fields)->where('slug', $slug)->first()) {
                return messageResponse('Data not found...', [], 404, 'error');
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
