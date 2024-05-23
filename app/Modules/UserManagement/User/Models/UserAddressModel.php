<?php

namespace App\Modules\UserManagement\User\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;


class UserAddressModel extends EloquentModel
{

    protected $table = "user_addresses";
    protected $guarded = [];
}
