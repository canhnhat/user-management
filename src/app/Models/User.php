<?php

namespace NTCDev\User\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use NTCDev\Core\Traits\BaseModelTrait;
use Prettus\Repository\Traits\TransformableTrait;
use Ultraware\Roles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use Notifiable, BaseModelTrait, TransformableTrait, HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar',
        'status',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'id');
    }
}
