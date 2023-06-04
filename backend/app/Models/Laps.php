<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laps extends Model
{
    use HasFactory;
    protected $fillable = [
        'localisation',
        'date',
        'vue',
        'number'
    ];
}
