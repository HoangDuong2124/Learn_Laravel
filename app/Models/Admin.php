<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Admin extends Authenticatable
{
    use Notifiable,HasFactory;
    protected $table = 'account_admin';
    protected $fillable = [
        'admin_name','admin_email','admin_phone','password',
    ];
    protected $hidden =[
        'password',
    ];

}
