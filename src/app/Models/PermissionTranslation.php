<?php


namespace NTCDev\User\Models;
use Illuminate\Database\Eloquent\Model;

class PermissionTranslation extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = false;
}