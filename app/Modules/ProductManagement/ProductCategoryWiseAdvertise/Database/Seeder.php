<?php
namespace App\Modules\ProductManagement\ProductCategoryWiseAdvertise\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductCategoryWiseAdvertise\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductCategoryWiseAdvertise\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'category_id' => facker()->name,
            'title' => facker()->name,
            'is_promition' => facker()->name,
            'image' => facker()->name,
            'start_date' => facker()->name,
            'end_data' => facker()->name,
            ]);
        }
    }
}