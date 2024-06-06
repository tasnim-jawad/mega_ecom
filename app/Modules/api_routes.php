<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/Auth/Route.php");
/*
|--------------------------------------------------------------------------
| File management Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/FileUploader/Route.php");
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/UserManagement/User/Route.php");
/*
|--------------------------------------------------------------------------
| Product management Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/ProductManagement/ProductCategoryGroup/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductCategory/Route.php");
include_once  base_path("app/Modules/ProductManagement/Product/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductBarCode/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductBrand/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductCategory/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductCategoryGroup/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductMenufacturer/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductUnit/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductUnitGroup/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductVarient/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductVarientGroup/Route.php");
include_once  base_path("app/Modules/ProductManagement/ProductVarientValue/Route.php");

/*
|--------------------------------------------------------------------------
| Location management Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/LocationManagement/Country/Route.php");
include_once  base_path("app/Modules/LocationManagement/StateDivision/Route.php");
include_once  base_path("app/Modules/LocationManagement/District/Route.php");
include_once  base_path("app/Modules/LocationManagement/Station/Route.php");

/*
|--------------------------------------------------------------------------
| Purchage management Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/PurchageManagement/PurchaseOrder/Route.php");
include_once  base_path("app/Modules/PurchageManagement/PurchaseReturnOrder/Route.php");
/*
|--------------------------------------------------------------------------
| Sales management Routes
|--------------------------------------------------------------------------
*/
include_once  base_path("app/Modules/SalesManagement/SalesEcommerceOrder/Route.php");
include_once  base_path("app/Modules/SalesManagement/SalesInvoice/Route.php");
include_once  base_path("app/Modules/SalesManagement/SalesOrder/Route.php");