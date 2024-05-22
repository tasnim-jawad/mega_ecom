<?php

namespace App\Modules\User;

use App\Modules\User\Actions\All;
use App\Modules\User\Actions\Delete;
use App\Modules\User\Actions\Show;
use App\Modules\User\Actions\Store;
use App\Modules\User\Actions\Update;
use App\Modules\User\Validations\Validation;
use App\Modules\User\Actions\BulkActions;
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


    public function checkUser()
    {
        if (auth()->check()) {
            return response()->json([
                'user' => auth()->user()->load(['role']),
            ], 200);
        }

        return response()->json([""]);
    }

}
