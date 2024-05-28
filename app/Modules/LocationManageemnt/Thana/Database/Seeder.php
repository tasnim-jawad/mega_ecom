<?php
namespace App\Modules\LocationManageemnt\Thana\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\LocationManageemnt\Thana\Database\Seeder"
     */
    static $model = \App\Modules\LocationManageemnt\Thana\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'country_id' => facker()->name,
            'division_id' => facker()->name,
            'disctrict_id' => facker()->name,
            'name' => facker()->name,
            ]);
        }
    }
}