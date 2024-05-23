<?php

namespace App\Modules\ProductManagement\ProductMenufacturer\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductMenufacturer\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductMenufacturer\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
            self::$model::create([
                'title' => facker()->name,
                'serial' => $i,
                'image' => facker()->imageUrl(),
            ]);
        }
    }
}
