<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User     ;

class Admin extends User
{
use  HasFactory;

/**
 * The attributes that are mass assignable.
 *
 * @var array<int, string>
 */
protected $fillable = [
    'name',
    'email',
    'password',
    'image',
];
// static function boot()
//     {
//     parent::boot();
//     static::addGlobalScope('admin',function(Builder $builder){
//         $builder->where('role','user');
//     });
// }

/**
 * The attributes that should be hidden for serialization.
 *
 * @var array<int, string>
 */
protected $hidden = [
    'password',
    'remember_token',
];





/**
 * The attributes that should be cast.
 *
 * @var array<string, string>
 */

protected $casts = [
    'password' => 'hashed',
];
}

