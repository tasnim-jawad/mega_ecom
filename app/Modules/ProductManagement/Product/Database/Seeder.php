<?php

namespace App\Modules\ProductManagement\Product\Database;

use Carbon\Carbon;
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

        $data = [
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Chinigura Premium Aromatic Rice, 1Kg",
                "regular_price" => "৳ 170",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Sindabad Chinigura Rice, 1Kg",
                "regular_price" => "৳ 140",
                "del_price" => "৳160"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Ruchi Puffed Rice (Muri), 400gm",
                "regular_price" => "৳ 60",
                "del_price" => "৳65"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Ruchi Puffed Rice (Muri), 200gm",
                "regular_price" => "৳ 33",
                "del_price" => "৳35"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Fortune Biryani Special Basmati Rice, 50Kg",
                "regular_price" => "৳ 18000",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Kalijira Rice, 2kg",
                "regular_price" => "৳ 320",
                "del_price" => "৳332"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fresh Chinigura Rice, 1kg",
                "regular_price" => "৳ 160",
                "del_price" => "৳170"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fortune Basmati Rice, 1kg",
                "regular_price" => "৳ 410",
                "del_price" => "৳480"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Nazirshail Rice, 5kg",
                "regular_price" => "৳ 490",
                "del_price" => "৳503"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fortune XXL Basmoti Rice, 50Kg",
                "regular_price" => "৳ 16500",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Premimum Chinigura Rice, 50kg",
                "regular_price" => "৳ 6800",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Sindabad Chinigura Rice, 2Kg",
                "regular_price" => "৳ 283",
                "del_price" => "৳320"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fortune Basmati Rice, 5kg",
                "regular_price" => "৳ 2300",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Nazirshail Rice, 10kg",
                "regular_price" => "৳ 890",
                "del_price" => "৳940"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Kalijira Rice, 5kg",
                "regular_price" => "৳ 760",
                "del_price" => "৳816"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Kalijira Rice, 1kg",
                "regular_price" => "৳ 165",
                "del_price" => "৳170"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "ACI Pure Premium Nazirshail Rice, 5kg",
                "regular_price" => "৳ 465",
                "del_price" => "৳470"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "ACI Pure Premium Miniket Rice, 5kg",
                "regular_price" => "৳ 465",
                "del_price" => "৳470"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Chikon Super Chira, 500gm (Local Packing)",
                "regular_price" => "৳ 50",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Teer Miniket Rice, 10kg",
                "regular_price" => "৳ 865",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Pran Nazirshail Rice, 5kg",
                "regular_price" => "৳ 460",
                "del_price" => "৳470"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Chikon Super Chira, 250gm (Local Packing)",
                "regular_price" => "৳ 25",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Teer Miniket Rice, 5kg",
                "regular_price" => "৳ 435",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fortune Everyday Basmoti Rice, 50Kg",
                "regular_price" => "৳ 15970",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Lazzat Super Basmati Rice, 5Kg (Extra Long Grain S",
                "regular_price" => "৳ 2300",
                "del_price" => "৳2500"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Rupchanda Miniket Rice, 50Kg",
                "regular_price" => "৳ 3420",
                "del_price" => "৳3500"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Pran Muri (Puffed Rice), 500gm",
                "regular_price" => "৳ 65",
                "del_price" => "৳70"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Chashi Aromatic Chinigura Rice, 2kg",
                "regular_price" => "৳ 330",
                "del_price" => "৳340"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Sindabad Nazirshail Rice, 5Kg",
                "regular_price" => "৳ 410",
                "del_price" => "৳450"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Pran Aromatic Chinigura Premium Rice, 1kg",
                "regular_price" => "৳ 160",
                "del_price" => "৳170"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Nazirshail Rice, 5kg",
                "regular_price" => "৳ 432",
                "del_price" => "৳460"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Sindabad Miniket Rice, 5Kg",
                "regular_price" => "৳ 380",
                "del_price" => "৳450"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Sindabad Chinigura Rice, 5Kg",
                "regular_price" => "৳ 680",
                "del_price" => "৳750"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Teer Puffed Rice (Muri), 500gm",
                "regular_price" => "৳ 65",
                "del_price" => "৳70"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Pusti Aromatic Rice, 1Kg",
                "regular_price" => "৳ 143",
                "del_price" => "৳160"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Chashi Aromatic Chinigura Rice, 1kg",
                "regular_price" => "৳ 165",
                "del_price" => "৳175"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Miniket Rice, 5Kg",
                "regular_price" => "৳ 380",
                "del_price" => "৳460"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Nazirshail Rice, 25Kg",
                "regular_price" => "৳ 1860",
                "del_price" => "৳1890"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Miniket Rice, 25Kg",
                "regular_price" => "৳ 1720",
                "del_price" => "৳1750"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "ACI Pure Premium Nazirshail Rice, 10Kg",
                "regular_price" => "৳ 930",
                "del_price" => ""
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Sindabad Aathash Rice, 5Kg",
                "regular_price" => "৳ 300",
                "del_price" => "৳350"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Chinigura Rice, 5kg",
                "regular_price" => "৳ 825",
                "del_price" => "৳870"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Miniket Rice, 5kg",
                "regular_price" => "৳ 435",
                "del_price" => "৳473"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Desh Agro Bashmoti Rice, 25Kg",
                "regular_price" => "৳ 1960",
                "del_price" => "৳2050"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/extend-icon.svg",
                "title" => "Lazzat Super Basmati Rice, 1kg (Extra Long Grain S",
                "regular_price" => "৳ 469",
                "del_price" => "৳510"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Desh Agro Miniket Rice, 25Kg",
                "regular_price" => "৳ 1720",
                "del_price" => "৳1750"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Bashmati Rice, 1kg",
                "regular_price" => "৳ 350",
                "del_price" => "৳390"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Chinigura Rice, 1kg",
                "regular_price" => "৳ 160",
                "del_price" => "৳170"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Aarong Natural Chinigura Rice, 2kg",
                "regular_price" => "৳ 315",
                "del_price" => "৳352"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Miniket Rice, 10kg",
                "regular_price" => "৳ 830",
                "del_price" => "৳880"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Pran Miniket Rice, 5kg",
                "regular_price" => "৳ 440",
                "del_price" => "৳460"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Daawat Biryani Basmati Rice, 1kg",
                "regular_price" => "৳ 450",
                "del_price" => "৳522"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Kohinoor Extra Long Basmati Rice, 1kg",
                "regular_price" => "৳ 380",
                "del_price" => "৳420"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Khan Katar Nazir Rice, 25Kg",
                "regular_price" => "৳ 1900",
                "del_price" => "৳1950"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Rupchanda Chinigura Premium Aromatic Rice, 2kg",
                "regular_price" => "৳ 290",
                "del_price" => "৳340"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fortune Everyday Basmoti Rice, 20Kg",
                "regular_price" => "৳ 6400",
                "del_price" => "৳6600"
            ],
            [
                "image" => "https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg",
                "title" => "Fortune XXL Basmoti Rice, 25Kg",
                "regular_price" => "৳ 8250",
                "del_price" => "৳8500"
            ],
        ];

        foreach ($data as $item) {

            $regularPrice = 0;
            $delPrice = 0;
            $discountPrice = 0;

            if ($item['regular_price'] != "") {
                $regularPrice = preg_replace('/[^0-9]/', '', $item['regular_price']);
            }

            if ($item['regular_price'] != "") {
                $delPrice = preg_replace('/[^0-9]/', '', $item['del_price']);
            }

            if ($delPrice && $regularPrice) {
                $discountPrice = $delPrice - $regularPrice;
            }

            $product = self::$model::create([
                'product_category_group_id' => 1,
                'title' => $item['title'],
                'type' => "product",
                'short_description' => $item['title'] . " are one of the most popular fruits in the world. They're full of important nutrients. It contains high amounts of vitamins C, and B, as well as magnesium, potassium, folate, and antioxidants. It also contains some fiber and protein. Can be eaten both raw and ripe. Ripe bananas are sweet. Sagor bananas are usually long in size and ripen very quickly.",
                'description' => $item['title'] . " are one of the most popular fruits in the world. They're full of important nutrients. It contains high amounts of vitamins C, and B, as well as magnesium, potassium, folate, and antioxidants. It also contains some fiber and protein. Can be eaten both raw and ripe. Ripe bananas are sweet. Sagor bananas are usually long in size and ripen very quickly.",
                'product_menufecturer_id' => rand(1, 5),
                'product_brand_id' => rand(1, 5),
                'sku' => rand(10000, 99999),
                'product_unit_id' => rand(1, 5),
                'alert_quantity' => 10,
                'seller_points' => rand(2, 5),
                'is_returnable' => rand(0, 1),
                'expiration_days' => Carbon::now()->addMonths(30)->toDateString(),
                // 'purchase_account' => facker()->name,

                'discount_type' => "flat",
                'discount_amount' => $discountPrice,

                'price_type' => "single",

                'purchase_price' => $regularPrice - 6,

                'customer_sales_price' => $regularPrice,
                'retailer_sales_price' => $regularPrice - 5,
                'minimum_sale_price' => $regularPrice - 10,
                'maximum_sale_price' => $regularPrice + 20,

                'tax_type' => ['inclusive', 'exclusive'][rand(0, 1)],
                'tax_amount' => .5,
                // 'tax_id' => facker()->name,
                // 'vat_on_sale' => facker()->name,
                // 'vat_on_purchase' => facker()->name,
            ]);

            $product->product_categories()->attach([rand(1, 5), rand(6, 9)]);

            // $imageUrl = parse_url($item['image']);
            // $imagePath = $imageUrl['path'];
            $image = file_get_contents($item['image']);

            file_put_contents(public_path('uploads/d_products/' . $product->id . '.jpg'), $image);

            $product->product_images()->create([
                'url' => 'uploads/d_products/' . $product->id . '.jpg',
                'caption' => $item['title'],
                'alt' => $item['title'],
                'is_primary' => 1,
                'is_thumb' => 0,
            ]);
        }
    }
}
