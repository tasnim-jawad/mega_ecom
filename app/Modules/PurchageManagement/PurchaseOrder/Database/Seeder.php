<?php

namespace App\Modules\PurchageManagement\PurchaseOrder\Database;

use Carbon\Carbon;
use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\PurchageManagement\PurchaseOrder\Database\Seeder"
     */
    static $model = \App\Modules\PurchageManagement\PurchaseOrder\Models\Model::class;
    static $purchaseOrderProductsModel = \App\Modules\PurchageManagement\PurchaseOrder\Models\PurchaseOrderProductsModel::class;
    static $purchaseOrderChargeModel = \App\Modules\PurchageManagement\PurchaseOrder\Models\PurchaseChargeModel::class;

    /**
     * stock management model
     */
    static $producStockModel = \App\Modules\StockManagement\ProductStock\Models\Model::class;

    public function run(): void
    {

        self::$model::truncate();

        $productId = 1;

        for ($i = 1; $i < 10; $i++) {
            $subTotal = 0;
            $purchaseOrder = self::$model::create([
                'product_wearhouse_id' => 1,
                'supplier_id' => 7,
                'date' => Carbon::now()->subDays(3)->toDateString(),
                'reference' => "Bill" . rand('1000000', '9999999'),
                'discount_on_all' => rand(50, 100),
                'discount_on_all_type' => "fixed",
                'subtotal' => $subTotal,
                'total' => null,
            ]);

            for ($j = $productId; $j < $productId + 3; $j++) {

                $price = [500, 700, 1000][rand(0, 2)];

                $purchaseOrderProducts = self::$purchaseOrderProductsModel::create([
                    "purchase_order_id" => $purchaseOrder->id,
                    "product_id" => $j,
                    "purchase_price" => $price,
                    "discount" => 50,
                    "qty" => 3,
                    "discount_type" => "fixed",
                    "subtotal" => $price * 3,
                    "total" => ($price * 3) - 50,
                ]);

                $purchaseOrderCharge = self::$purchaseOrderChargeModel::create([
                    "purchase_order_id" => $purchaseOrder->id,
                    "purchase_order_product_id" => $purchaseOrderProducts->id,
                    "vat_id" => 1,
                    "vat_group_id" => null,
                    "amount" => $price * 2 / 100,
                ]);

                $purchaseOrderProducts->total += $purchaseOrderCharge->amount;
                $purchaseOrderProducts->save();
                $subTotal +=  $purchaseOrderProducts->total;

                $producStock =  self::$producStockModel::create([
                    "data" => Carbon::now()->toDateString(),
                    "stock_type" => 'purchase',
                    "product_id" => $j,
                    "qty" => $purchaseOrderProducts->qty,
                    "bill_receipt_no" => $purchaseOrder->reference,
                    "purchase_order_id" => $purchaseOrder->id,
                ]);

                $producStock->save();
            }

            $purchaseOrder->subtotal = $subTotal;
            $purchaseOrder->total = $subTotal - $purchaseOrder->discount_on_all;
            $purchaseOrder->save();

            $productId += 3;
        }
    }
}
