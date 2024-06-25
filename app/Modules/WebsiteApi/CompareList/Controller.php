<?php

namespace App\Modules\WebsiteApi\CompareList;

use App\Modules\WebsiteApi\CompareList\Actions\All;
use App\Modules\WebsiteApi\CompareList\Actions\Destroy;
use App\Modules\WebsiteApi\CompareList\Actions\Show;
use App\Modules\WebsiteApi\CompareList\Actions\Store;
use App\Modules\WebsiteApi\CompareList\Actions\Update;
use App\Modules\WebsiteApi\CompareList\Actions\SoftDelete;
use App\Modules\WebsiteApi\CompareList\Actions\Restore;
use App\Modules\WebsiteApi\CompareList\Actions\Import;
use App\Modules\WebsiteApi\CompareList\Validations\BulkActionsValidation;
use App\Modules\WebsiteApi\CompareList\Validations\GetAllValidation;
use App\Modules\WebsiteApi\CompareList\Validations\Validation;
use App\Modules\WebsiteApi\CompareList\Actions\BulkActions;
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