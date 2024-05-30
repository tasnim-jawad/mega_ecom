<?php
namespace App\Modules\VatManagement\Vat\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\VatManagement\Vat\Database\Seeder"
     */
    static $model = \App\Modules\VatManagement\Vat\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'title' => facker()->name,
            'percentage' => facker()->name,
            ]);
        }
    }
}