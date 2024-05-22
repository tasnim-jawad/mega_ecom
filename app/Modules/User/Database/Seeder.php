<?php

namespace App\Modules\User\Database;

use Illuminate\Database\Seeder as SeederClass;
use Illuminate\Support\Facades\Hash;

class Seeder extends SeederClass
{
    /**
     php artisan db:seed --class="App\Modules\User\Database\Seeder"
     * Run the database seeds.
     */
    static $userModel = \App\Modules\User\Models\Model::class;
    static $roleModel = \App\Modules\UserRole\Models\Model::class;
    public function run(): void
    {
        self::$userModel::truncate();

        $roles = self::$roleModel::get();

        foreach ($roles as  $role) {
            $userData = self::$userModel::create([
                "full_name" => "Mr " . $role->name,
                "email" => $role->name . "@gmail.com",
                "password" => Hash::make('@12345678'),
                "role_id" => $role->id,
                "phone" => rand(99999999999, 999999999999),
            ]);
            $userData->permissions()->attach([1, 2, 3]);
            $userData->save();
        }
    }
}
