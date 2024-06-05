<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder\Database;

use Carbon\Carbon;
use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\SalesManagement\SalesEcommerceOrder\Database\Seeder"
     */
    static $model = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\Model::class;
    static $SalesOrderChargeModel = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\SalesEcommerceOrderChargeModel::class;
    static $SalesOrderProductModel = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\SalesEcommerceOrderProductModel::class;
    static $SalesOrderPaymentModel = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\SalesEcommerceOrderPaymentModel::class;
    /**
     * stock management model
     */
    static $producStockModel = \App\Modules\StockManagement\ProductStock\Models\Model::class;
    /**
     *  run
     */
    public function run(): void
    {

        self::$model::truncate();
        $productId = 1;
        for ($i = 1; $i < 5; $i++) {
            $subTotal = 0;
            $order =  self::$model::create([

                'order_id' => rand(1000000, 999999999),
                'date' => Carbon::now()->toDateString(),
                'user_type' => "ecommerce",
                'customer_id' => 3,
                'is_delivered' => 0,
                'order_status' => 'pending',
                'user_address_id' => 1,
                'delivery_method' => 'home_delivery',
                'delivery_address' => "mirpur dhaka",
                'delivery_charge' => 50,
                'additional_charge' => 0,
                'product_coupon_id' => null,
                'coupon_discount' => null,
                'subtotal' => $subTotal,
                'total' => 0,
                'is_paid' => 0,
                'payment_id' => null,
                'payment_method' => "cod",
            ]);

            for ($j = $productId; $j < $productId + 3; $j++) {

                $price = [500, 700, 1000][rand(0, 2)];

                $purchaseOrderProducts = self::$SalesOrderProductModel::create([
                    "sales_ecommerce_order_id" => $order->id,
                    "product_id" => $j,
                    "product_price" => $price,
                    "discount" => 50,
                    "qty" => 3,
                    "discount_type" => "fixed",
                    "subtotal" => $price * 3,
                    "total" => ($price * 3) - 50,
                ]);

                $purchaseOrderCharge = self::$SalesOrderChargeModel::create([
                    "sales_order_id" => $order->id,
                    "sales_order_product_id" => $purchaseOrderProducts->id,
                    "vat_id" => 1,
                    "vat_group_id" => null,
                    "amount" => $price * 2 / 100,
                ]);

                $purchaseOrderProducts->total += $purchaseOrderCharge->amount;
                $purchaseOrderProducts->save();
                $subTotal +=  $purchaseOrderProducts->total;

                $producStock =  self::$producStockModel::create([
                    "date" => Carbon::now()->toDateString(),
                    "stock_type" => 'purchase',
                    "product_id" => $j,
                    "qty" => $purchaseOrderProducts->qty,
                    "bill_receipt_no" => $order->reference,
                    "purchase_order_id" => $order->id,
                ]);

                $producStock->save();
            }

            $order->subtotal = $subTotal;
            $order->total = $subTotal - $order->discount_on_all;
            $order->save();

            $productId += 3;
        }
    }
}
