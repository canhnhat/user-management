<?php


namespace NTCDev\User\Models;
use Prettus\Repository\Traits\TransformableTrait;
use Ultraware\Roles\Models\Role as BaseRole;
use \Dimsav\Translatable\Translatable;

class Role extends BaseRole
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