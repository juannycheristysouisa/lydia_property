<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'nik', 'address', 'check_in', 'check_out',
        'dewasa', 'anak', 'total_price'
    ];
}