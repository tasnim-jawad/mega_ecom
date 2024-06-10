<?php
use Carbon\Carbon;


/**
 * ```js
  StoreProductCategoryVarients($varientd = [], $product_categories = [], $product)
 */

function StoreProductCategoryVarients($varients = [], $product_categories = [], $product)
{
    $ProductModel = \App\Modules\ProductManagement\Product\Models\Model::class;
    $productCategoryVarientModel = \App\Modules\ProductManagement\Product\Models\ProductCategoryVarientModel::class;


    foreach ($product_categories as $catId) {

        foreach ($varients as $item) {

            $totalProduct = $ProductModel::whereHas('product_categories', function ($q) use ($catId) {
                $q->where('id', $catId);
            })
                ->whereHas('product_verient_price', function ($q) use ($product, $item) {
                    $q->where('product_id', $product->id)
                        ->where('verient_value_id', $item['verient_value_id']);
                })
                ->count();

            $productCategoryVarientModel::create([
                "category_id" => $catId,
                "verient_group_id" => $item['verient_group_id'],
                "verient_id" => $item['verient_id'],
                "verient_value_id" => $item['verient_value_id'],
                "total_product" => $totalProduct
            ]);
        }
    }
}


/**
 * ```js
  StoreProductCategoryVarients($varientd = [], $product_categories = [], $product)
 */

function StoreProductCategoryBrand($varients = [], $product_categories = [], $product)
{
    $ProductModel = \App\Modules\ProductManagement\Product\Models\Model::class;
    $productCategoryVarientModel = \App\Modules\ProductManagement\Product\Models\ProductCategoryVarientModel::class;


    foreach ($product_categories as $catId) {

        foreach ($varients as $item) {

            $totalProduct = $ProductModel::whereHas('product_categories', function ($q) use ($catId) {
                $q->where('id', $catId);
            })
                ->whereHas('product_verient_price', function ($q) use ($product, $item) {
                    $q->where('product_id', $product->id)
                        ->where('verient_value_id', $item['verient_value_id']);
                })
                ->count();

            $productCategoryVarientModel::create([
                "category_id" => $catId,
                "verient_group_id" => $item['verient_group_id'],
                "verient_id" => $item['verient_id'],
                "verient_value_id" => $item['verient_value_id'],
                "total_product" => $totalProduct
            ]);
        }
    }
}



// product_category_brand(table) -> category_id ,brand_id,total_product : 1 , 5 , 20 (commonfn n api) totsproduct insert
// product_category_brand(table) -> category_id ,brand_id,total_product : 1 , 5 , 20 (commonfn n api) totsproduct insert

// product_category_varient->(table) category_id,varient_group_id,verient_id,varient_value_id,total_product

//  $category =[
//   1,2,3,4,5
// ]



//  $verient = [

//    [
//       verient_group_id =>
//       verient_id =>
//       verient_value_id : 1,
//    ]
// ]

// foreach($cetegory as $catId){

//     foreach($verient as $item){

//         $totalProduct = Product::whereHas(product_category,function($q){
//            $q->where('id',$catId)
//         })->
//         whereHas(product_verient_price,function($q){
//            $q->where('product_id',$product->id)
//            $q->where('varient_value_id',$item->verient_value_id)
//         })->count()
//            product_category_verient::create[
//               category_id,
//               varient_group_id,
//               verient_id,
//               varient_value_id,
//               total_product
//            ]

//     }

//    }
