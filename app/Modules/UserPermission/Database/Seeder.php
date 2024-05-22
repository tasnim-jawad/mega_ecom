<?php

namespace App\Modules\UserPermission\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\UserPermission\Database\Seeder"
     */
    static $model = \App\Modules\UserPermission\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        $permissions = [
            'can_create',
            'can_edit',
            'can_delete',
        ];
        foreach ($permissions as $index => $permission) {
            self::$model::create([
                'title' => $permission,
                'permission_serial' => $index + 1,
            ]);
        }
    }
}
