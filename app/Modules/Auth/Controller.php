<?php

namespace App\Modules\Auth;

use App\Modules\Auth\Actions\Login;
use App\Modules\Auth\Actions\Register;

use App\Http\Controllers\Controller as ControllersController;
use App\Modules\Auth\Validations\LoginValidation;
use App\Modules\Auth\Validations\RegisterValidation;

class Controller extends ControllersController
{

    public function login(LoginValidation $request)
    {
        $data = Login::execute($request);
        return $data;
    }
    public function register(RegisterValidation $request)
    {
        $data = Register::execute($request);
        return $data;
    }

    public function checkUser()
    {
        if (auth()->check()) {
            return response()->json([
                'user' => auth()->user()->load(['role', 'permissions']),
            ], 200);
        }
        return response()->json(["User not found"], 404);
    }
}
