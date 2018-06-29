<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    // //Get the roles a user has
    // public function roles(){
    //     return $this->belongsToMany('Role','users_roles');
    // }

    // /**
    //  * Find out if User is an employee, based on 
    //  * if has any  roles 
    //  * @return boolean
    //  */
    // public function isEmployee(){
    //     $roles=$this->roles->toArray();
    //     return !empty($roles);
    // }

    // /**
    //  * Find out if user has a specific role
    //  * @return boolean
    //  */
    // public function hasRole($check){
    //     return in_array($check, array_fetch($this->roles->toArray(),
    //     'name'));
    // }
}
