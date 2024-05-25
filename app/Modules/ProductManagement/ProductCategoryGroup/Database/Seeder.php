<?php

namespace App\Modules\ProductManagement\ProductCategoryGroup\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductCategoryGroup\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductCategoryGroup\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 10; $i++) {
            self::$model::create([
                'title' => facker()->name,
            ]);
        }
    }
}
