<?php


namespace NTCDev\User\Models;
use Illuminate\Database\Eloquent\Model;

class RoleTranslation extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = false;
}