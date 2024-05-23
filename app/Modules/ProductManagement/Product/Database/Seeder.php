<?php

namespace App\Modules\ProductManagement\Product\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\Product\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\Product\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
            self::$model::create([
                'title' => facker()->name,
                'type' => facker()->randomElement(['service', 'product']),
                'short_description' => facker()->text(),
                'description' => facker()->text(),
                'menufecturer_id' => rand(1, 10),
                'brand_id' => rand(1, 10),
                'sku' => rand(1, 100),
                'unit' => 'kilogram',
                'alert_quantity' => rand(5, 10),
                'saller_points' => facker()->address(),
                'is_returnable' => rand(0, 1),
                'expiration_days' => facker()->date(),
                'purchase_price' => rand(1000, 50000),
                'purchase_account' => facker()->name,
                'discount_type' => facker()->randomElement(['flat', 'percent']),
                'discount_amount' => rand(1000, 50000),
                'tax_id' => rand(1, 10),
                'tax_type' => facker()->randomElement(['inclusive', 'exclusive']),
                'vat_on_sale' => rand(1000, 50000),
                'vat_on_purchase' => rand(1000, 50000),
            ]);
        }
    }
}
