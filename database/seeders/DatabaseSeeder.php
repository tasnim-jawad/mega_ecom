<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Modules\UserRole\Database\Seeder as UserRoleSeeder;
use App\Modules\UserPermission\Database\Seeder as UserPermissionSeeder;
use App\Modules\User\Database\Seeder as UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserRoleSeeder::class,
            UserPermissionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
