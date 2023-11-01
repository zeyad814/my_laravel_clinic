<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Major extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'image',
    ];
}

