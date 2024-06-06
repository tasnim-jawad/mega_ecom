<?php

namespace App\Modules\Auth\Actions;

use App\Modules\Auth\Validations\LoginValidation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Login
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;

    public static function execute(LoginValidation $request)
    {
        try {
            $check_auth_user = self::$model::where('email', $request->email)->first();

            // if ($check_auth_user->is_blocked) {
            //     return response()->json(['status' => 'error', 'message' => 'Sorry,you are blocked'], 404);
            // }

            if ($check_auth_user && Hash::check($request->password, $check_auth_user->password)) {
                DB::table('oauth_access_tokens')->where("user_id", $check_auth_user->id)->update(['revoked' => 1]);
                $data['access_token'] = $check_auth_user->createToken('accessToken')->accessToken;
                $data['user'] = $check_auth_user;
                return messageResponse('Successfully Loged In', $data, 200, 'success');
            } else {
                // if ($check_auth_user->no_of_attempt > 2) {
                //     $check_auth_user->is_blocked = 1;
                // }

                return response()->json(['status' => 'error', 'message' => 'Sorry,user not found'], 404);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
