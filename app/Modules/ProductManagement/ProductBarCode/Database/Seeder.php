<?php
namespace App\Modules\ProductManagement\ProductBarCode\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductBarCode\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductBarCode\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'product_id' => rand(10000,999999),
            'barcode_image' => facker()->name,
            'price' => facker()->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 1000),
            'title' => facker()->name,
            'company_name' => facker()->name,
            ]);
        }
    }
}