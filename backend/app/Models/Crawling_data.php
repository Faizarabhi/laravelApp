<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crawling_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'img',
        'body',
        'parameters_id',
        'laps_id',
    ];
}