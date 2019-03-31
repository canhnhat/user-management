<?php


namespace NTCDev\User\Models;
use Prettus\Repository\Traits\TransformableTrait;
use Ultraware\Roles\Models\Permission as BasePermission;
use \Dimsav\Translatable\Translatable;

class Permission extends BasePermission
{
    use TransformableTrait, Translatable;
    protected $fillable = [
        'slug',
        'level'
    ];

    public $translatedAttributes = [
        'name',
        'description',
    ];
}