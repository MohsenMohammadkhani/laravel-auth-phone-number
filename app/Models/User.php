<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

// class User extends Authenticatable
class User extends Model
{
    // use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tbl_users';
    public $timestamps = false;
    protected $primaryKey = 'usr_id';
    protected $fillable = [
        'usr_name',
        'usr_mobile',
        'usr_sms_code_login',
    ];

}
