<?php

namespace App\Modules\UserManagement\User\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;


class UserAddressModel extends EloquentModel
{
    static $userAddressContactPersonModel = \App\Modules\UserManagement\User\Models\UserAddressContactPersonModel::class;
    static $userModel = \App\Modules\UserManagement\User\Models\Model::class;
    protected $table = "user_addresses";
    protected $guarded = [];
    public function user_address_contact_person()
    {
        return $this->hasMany(self::$userAddressContactPersonModel, 'user_address_id', 'id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(self::$userModel, 'id', 'user_id');
    // }
}
