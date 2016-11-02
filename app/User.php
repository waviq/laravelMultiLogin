<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'roles_id');
    }

    public function punyaRule($namaRule)
    {
        if($this->role->namaRule == $namaRule){
            return true;
        }
            return false;
    }




}
