<?php

namespace App\Modules\BannerManagement\HomeBanner\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\BannerManagement\HomeBanner\Database\Seeder"
     */
    static $model = \App\Modules\BannerManagement\HomeBanner\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 10; $i++) {
            self::$model::create([
                'title' => facker()->name,
                'short_des' => facker()->name,
                'offer_title' => facker()->name,
                'button_url' => facker()->name,
                'image' => facker()->imageUrl(1100, 500),
                'is_show' => rand(0, 1),
            ]);
        }
    }
}
