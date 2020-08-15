<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\JhonatanPermission\Traits\UserTrait;

class User extends Authenticatable
{
    use Notifiable, UserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function scopeName($query, $name){
        if (trim($name)) {
    		return $query->where('name','LIKE',"%$name%");
    	}          
    }
    
    public function scopeEmail($query, $email){
        if (trim($email)) {
    		return $query->where('name','LIKE',"%$email%");
    	}          
    }
   
}
