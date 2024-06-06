<?php
namespace App\Modules\ProductManagement\ProductVarientValue\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductVarientValue\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductVarientValue\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'product_varient_group_id' => facker()->name,
            'product_varient_id' => facker()->name,
            'title' => facker()->name,
            'is_default' => facker()->name,
            ]);
        }
    }
}