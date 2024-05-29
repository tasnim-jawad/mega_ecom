<?php

namespace App\Modules\ProductManagement\ProductCategory\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductCategory\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        /**

]
         */

        $data =
            [
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1629.jpg",
                    "title" => "চাল ও খাদ্যশস্য"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2675.jpg",
                    "title" => "তেল ও ঘি"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2677.jpg",
                    "title" => "যাবতীয় মসলা"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2696.jpg",
                    "title" => "ডিম ও দুগ্ধপণ্য"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2674.jpg",
                    "title" => "পানীয়"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2351.jpg",
                    "title" => "স্ন্যাকস ও বেকারি"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2720.jpg",
                    "title" => "সবজি ও ফলমূল"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2872.jpg",
                    "title" => "মাংস ও মাছ"
                ],
                [
                    "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2876.jpg",
                    "title" => "হিমায়িত ও টিনজাত খাদ্য"
                ]
            ];


        foreach ($data as $item) {

            self::$model::create([
                'title' => $item['title'],
                'serial' => 0,
                'product_category_group_id' => '1',
                'parent_id' => 0,
                'image' => $item['image'],
            ]);
        }

        $data = [
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2680.jpg",
                "title" => "চুলের যত্ন"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2678.jpg",
                "title" => "বডি ও বাথ"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2681.jpg",
                "title" => "ত্বক ও মুখমন্ডলের যত্ন"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2679.jpg",
                "title" => "দাঁতের যত্ন"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2685.jpg",
                "title" => "শেভিং ও গ্রুমিং"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2682.jpg",
                "title" => "মহিলাদের স্বাস্থ্যবিধি"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2940.jpg",
                "title" => "মেকআপ"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2186.jpg",
                "title" => "চিকিৎসা ও স্বাস্থ্য"
            ]
        ];
        foreach ($data as $item) {

            self::$model::create([
                'title' => $item['title'],
                'serial' => 0,
                'product_category_group_id' => '2',
                'parent_id' => 0,
                'image' => $item['image'],
            ]);
        }


        $data = [
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2179.jpg",
                "title" => "বড় যন্ত্রপাতি"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2180.jpg",
                "title" => "ছোট যন্ত্রপাতি"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2966.jpg",
                "title" => "ওয়াশার ও ড্রায়ার"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2968.jpg",
                "title" => "অডিও ভিডিও যন্ত্রপাতি"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2971.jpg",
                "title" => "হিটিং, কুলিং ও এয়ার কোয়ালিটি"
            ]
        ];
        foreach ($data as $item) {

            self::$model::create([
                'title' => $item['title'],
                'serial' => 0,
                'product_category_group_id' => '3',
                'parent_id' => 0,
                'image' => $item['image'],
            ]);
        }


        $data = [
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat2129.jpg",
                "title" => "ডেস্কটপ ও ল্যাপটপ"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1240.jpg",
                "title" => "মনিটর"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1925.jpg",
                "title" => "প্রিন্টার ও কপিয়ার"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1520.jpg",
                "title" => "কম্পোনেন্ট"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1521.jpg",
                "title" => "এক্সেসরিজ ও পেরিফেরাল"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1087.jpg",
                "title" => "নেটওয়ার্কিং সরঞ্জামাদি"
            ],
            [
                "image" => "https://m2ce.sindabad.com/media/catalog/category/subcategory/cat1194.jpg",
                "title" => "নজরদারি ও নিরাপত্তা ব্যবস্থা"
            ]
        ];
        foreach ($data as $item) {

            self::$model::create([
                'title' => $item['title'],
                'serial' => 0,
                'product_category_group_id' => '4',
                'parent_id' => 0,
                'image' => $item['image'],
            ]);
        }
    }
}
