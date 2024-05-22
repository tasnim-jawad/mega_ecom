<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use App\Modules\UserRole\Model as UserRole;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    static $userRoleModel = \App\Modules\UserRole\Models\Model::class;
    static $userPermissionModel = \App\Modules\UserPermission\Models\Model::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
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

    public function role()
    {
        return $this->belongsTo(self::$userRoleModel, 'role_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(self::$userPermissionModel, 'user_user_permission', 'user_id', 'user_permission_id', 'id', 'permission_serial'); //user::id
    }
}