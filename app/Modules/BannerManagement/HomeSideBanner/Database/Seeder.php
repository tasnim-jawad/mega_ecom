<?php

namespace App\Modules\BannerManagement\HomeSideBanner\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\BannerManagement\HomeSideBanner\Database\Seeder"
     */
    static $model = \App\Modules\BannerManagement\HomeSideBanner\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        self::$model::create([
            'banner_one' => facker()->imageUrl(250, 500),
            'banner_two' => facker()->imageUrl(550, 300),
            'banner_three' => facker()->imageUrl(550, 300),
            'banner_four' => facker()->imageUrl(250, 270),
        ]);
    }
}
