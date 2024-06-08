<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class SalesEcommerceOrderProductModel extends EloquentModel
{

    static $stockLogModel = \App\Modules\StockManagement\ProductStock\Models\StockLogModel::class;

    protected $table = "sales_ecommerce_order_products";
    protected $guarded = [];
    protected $appends = ['stock_available'];

    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 150) {
                $data->slug = substr($data->slug, strlen($data->slug) - 150, strlen($data->slug));
            }
            if (auth()->check()) {
                $data->creator = auth()->user()->id;
            }
            $data->save();
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }

    protected function getStockAvailableAttribute()
    {
        // 'stock_type', ['initial', 'purchase', 'sales', 'return', 'waste']
        $purchase = self::$stockLogModel::whereIn('stock_type', ['initial', 'purchase', 'return'])->sum('qty');
        $sales = self::$stockLogModel::whereIn('stock_type', ['sales', 'waste'])->sum('qty');

        $avalable =  $purchase - $sales;

        if ($avalable < 0) {
            return 0;
        } else {
            return $avalable;
        }
    }
}
