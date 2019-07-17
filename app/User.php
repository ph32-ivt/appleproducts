<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','firstname','lastname','phone','address','gender','street','date_of_birth','role_id'
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

    public function products()
    {   
        return $this->hasMany('App\Product');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
     public function province()
    {
        return $this->hasOne('App\Province');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
