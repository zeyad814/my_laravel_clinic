<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor_id',
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
