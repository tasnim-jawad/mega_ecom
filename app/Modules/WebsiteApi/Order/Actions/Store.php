<?php

namespace App\Modules\WebsiteApi\Order\Actions;

class Store
{
    static $model = \App\Modules\WebsiteApi\Order\Models\Model::class;
    static $cartModel = \App\Modules\WebsiteApi\Cart\Models\Model::class;

    public static function execute($request)
    {
        try {

            $billingDetails = $request->validated();
            $orderDetails = self::$cartModel::where('user_id', 3)->get()->toArray();
            dd($billingDetails, $orderDetails);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
