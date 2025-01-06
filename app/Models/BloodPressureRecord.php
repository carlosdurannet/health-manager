<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodPressureRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'systolic',
        'diastolic',
        'pulse',
        'recorded_at',
    ];

    protected $dates = [
        'recorded_at',
    ];
}
