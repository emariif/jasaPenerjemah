<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username','email','password','level','notelp','email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function User(){
        return $this->hasOne('App\Models\Detailjob');
        return $this->hasOne('App\Models\Job');
    }
    public function job(){
        return $this->hasOne('App\Models\Detailjob');
        return $this->hasOne('App\Models\Job');
    }
    public function Proposal(){
        return $this->hasOne('App\Models\Proposal');
    }

    public function detailwork(){
        return $this->hasMany('App\Models\Detailwork');
    }
}
