<?php

namespace App\Modules\ProductManagement\ProductCategoryGroup;

use App\Modules\ProductManagement\ProductCategoryGroup\Actions\All;
use App\Modules\ProductManagement\ProductCategoryGroup\Actions\Delete;
use App\Modules\ProductManagement\ProductCategoryGroup\Actions\Show;
use App\Modules\ProductManagement\ProductCategoryGroup\Actions\Store;
use App\Modules\ProductManagement\ProductCategoryGroup\Actions\Update;
use App\Modules\ProductManagement\ProductCategoryGroup\Validations\Validation;
use App\Modules\ProductManagement\ProductCategoryGroup\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index()
    {
        $data = All::execute();
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
        return $data;
    }

    public function show($id)
    {
        $data = Show::execute($id);
        return $data;
    }

    public function update(Validation $request, $id)
    {
        $data = Update::execute($request, $id);
        return $data;
    }

    public function destroy($id)
    {
        $data = Delete::execute($id);
        return $data;
    }
    public function bulkAction()
    {
        $data = BulkActions::execute();
        return $data;
    }

}