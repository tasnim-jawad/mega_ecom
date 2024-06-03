<?php

namespace App\Modules\SalesManagement\SalesQuotationOrderDetails;

use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\All;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\Destroy;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\Show;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\Store;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\Update;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\SoftDelete;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\Restore;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\Import;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Validations\BulkActionsValidation;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Validations\GetAllValidation;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Validations\Validation;
use App\Modules\SalesManagement\SalesQuotationOrderDetails\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index(GetAllValidation $request)
    {
        $data = All::execute($request);
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
        return $data;
    }

    public function show($slug)
    {
        $data = Show::execute($slug);
        return $data;
    }

    public function update(Validation $request, $slug)
    {
        $data = Update::execute($request, $slug);
        return $data;
    }

    public function softDelete()
    {
        $data = SoftDelete::execute();
        return $data;
    }
    public function destroy($slug)
    {
        $data = Destroy::execute($slug);
        return $data;
    }
    public function restore()
    {
        $data = Restore::execute();
        return $data;
    }
    public function import()
    {
        $data = Import::execute();
        return $data;
    }
    public function bulkAction(BulkActionsValidation $request)
    {
        $data = BulkActions::execute($request);
        return $data;
    }

}