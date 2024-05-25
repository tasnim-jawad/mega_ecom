<?php

namespace App\Modules\UserManagement\User\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends EloquentModel
{
    static $userRoleModel = \App\Modules\UserManagement\UserRole\Models\Model::class;
    static $userPermissionModel = \App\Modules\UserManagement\UserPermission\Models\Model::class;
    static $userAddressModel = \App\Modules\UserManagement\User\Models\UserAddressModel::class;

    protected $table = "users";
    protected $guarded = [];
    protected $appends = ['full_name'];
    use SoftDeletes;
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->name . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 150) {
                $data->slug = substr($data->slug, strlen($data->slug) - 150, strlen($data->slug));
            }
            $data->save();
        });

        static::deleting(function ($user) {
            $user->user_address()->delete();
        });
    }


    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }

    public function roles()
    {
        return $this->belongsTo(self::$userRoleModel, 'role_id', 'serial');
    }

    public function permissions()
    {
        return $this->belongsToMany(self::$userPermissionModel, 'user_user_permission', 'user_id', 'user_permission_id', 'id', 'permission_serial'); //user::id
    }

    public function user_address()
    {
        return $this->hasMany(self::$userAddressModel, 'user_id', 'id');
    }




    protected function fullName(): Attribute
    {
        return Attribute::make(
            function (mixed  $value, array $data) {
                $fullName =  $data['name'] . $data['user_name'];
                return $fullName;
            },
        );
    }
}
