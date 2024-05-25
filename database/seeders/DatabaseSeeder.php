<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Modules\UserManagement\UserCustomerType\Database\Seeder as UserCustomerTypeSeeder;
use App\Modules\UserManagement\UserSupplierType\Database\Seeder as UserSupplierTypeSeeder;
use App\Modules\UserManagement\UserRole\Database\Seeder as UserRoleSeeder;
use App\Modules\UserManagement\UserPermission\Database\Seeder as UserPermissionSeeder;
use App\Modules\UserManagement\User\Database\Seeder as UserSeeder;
//product seeder
use App\Modules\ProductManagement\ProductCategoryGroup\Database\Seeder as ProductCategoryGroupSeeder;
use App\Modules\ProductManagement\ProductCategory\Database\Seeder as ProductCategorySeeder;
use App\Modules\ProductManagement\ProductBrand\Database\Seeder as ProductBrandSeeder;
use App\Modules\ProductManagement\ProductMenufacturer\Database\Seeder as ProductMenufacturerSeeder;
use App\Modules\ProductManagement\Product\Database\Seeder as ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserCustomerTypeSeeder::class,
            UserSupplierTypeSeeder::class,
            UserRoleSeeder::class,
            UserPermissionSeeder::class,
            UserSeeder::class,
            //product seeder
            ProductCategoryGroupSeeder::class,
            ProductCategorySeeder::class,
            ProductBrandSeeder::class,
            ProductMenufacturerSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
