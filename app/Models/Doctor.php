<?php

namespace App\Models;

use App\Models\Major;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'bio',
        'email',
        'gender',
        'password',
        'image',
    ];
    public function major(){
        return $this->belongsTo(Major::class);
    }
}
