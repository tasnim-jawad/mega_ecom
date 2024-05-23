<?php

namespace App\Modules\UserManagement\User\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Model extends EloquentModel
{
    static $userRoleModel = \App\Modules\UserManagement\UserRole\Models\Model::class;
    static $userPermissionModel = \App\Modules\UserManagement\UserPermission\Models\Model::class;

    protected $table = "users";
    protected $guarded = [];
    protected $appends = ['title'];
    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 150) {
                $data->slug = substr($data->slug, strlen($data->slug) - 150, strlen($data->slug));
            }
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }

    public function roles()
    {
        return $this->belongsTo(self::$userRoleModel, 'role_id','serial');
    }

    public function permissions()
    {
        return $this->belongsToMany(self::$userPermissionModel, 'user_user_permission', 'user_id', 'user_permission_id', 'id', 'permission_serial'); //user::id
    }



    

    protected function title(): Attribute
    {
        return Attribute::make(
            function (mixed  $value, array $data) {
                return $data['full_name'];
            },
        );
    }
}
