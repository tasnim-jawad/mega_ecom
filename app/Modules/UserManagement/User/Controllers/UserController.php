<?php

namespace App\Modules\UserManagement\User\Controllers;

use App\Modules\UserManagement\User\Actions\User\All;
use App\Modules\UserManagement\User\Actions\User\Restroy;
use App\Modules\UserManagement\User\Actions\User\Show;
use App\Modules\UserManagement\User\Actions\User\Store;
use App\Modules\UserManagement\User\Actions\User\Update;
use App\Modules\UserManagement\User\Validations\Validation;
use App\Modules\UserManagement\User\Actions\User\BulkActions;
use App\Modules\UserManagement\User\Actions\User\SoftDelete;
use App\Modules\UserManagement\User\Actions\User\Restore;
use App\Http\Controllers\Controller as ControllersController;

class UserController extends ControllersController
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

    public function show($slug)
    {
        $data = Show::execute($slug);
        return $data;
    }

    public function update(Validation $request, $id)
    {

        $data = Update::execute($request, $id);
        return $data;
    }

    public function softDelete()
    {
        $data = SoftDelete::execute();
        return $data;
    }
    public function destroy()
    {
        $data = Restroy::execute();
        return $data;
    }
    public function restore()
    {
        $data = Restore::execute();
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
                'user' => auth()->user()->load(['role', 'permissions']),
            ], 200);
        }
        return response()->json([""]);
    }
}
