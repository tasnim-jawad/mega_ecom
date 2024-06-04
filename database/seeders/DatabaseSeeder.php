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
use App\Modules\ProductManagement\ProductUnitGroup\Database\Seeder as ProductUnitGroupSeeder;
use App\Modules\ProductManagement\ProductUnit\Database\Seeder as ProductUnitSeeder;
use App\Modules\ProductManagement\ProductBarCode\Database\Seeder as ProductBarCodeSeeder;
use App\Modules\ProductManagement\Product\Database\Seeder as ProductSeeder;
//location seeder
use App\Modules\LocationManagement\Country\Database\Seeder as CountrySeeder;
use App\Modules\LocationManagement\StateDivision\Database\Seeder as StateDivisionSeeder;
use App\Modules\LocationManagement\District\Database\Seeder as DistrictSeeder;
use App\Modules\LocationManagement\Thana\Database\Seeder as ThanaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //user management seeder
            UserCustomerTypeSeeder::class,
            UserSupplierTypeSeeder::class,
            UserRoleSeeder::class,
            UserPermissionSeeder::class,
            UserSeeder::class,
            //product management seeder
            ProductCategoryGroupSeeder::class,
            ProductCategorySeeder::class,
            ProductBrandSeeder::class,
            ProductMenufacturerSeeder::class,
            ProductUnitGroupSeeder::class,
            ProductUnitSeeder::class,
            ProductBarCodeSeeder::class,
            ProductSeeder::class,
            // location management
            CountrySeeder::class,
            StateDivisionSeeder::class,
            DistrictSeeder::class,
            ThanaSeeder::class,

        ]);
    }
}
