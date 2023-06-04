<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;
    protected $fillable = [
        'Domaine',
        'Contrat',
        'Salaire',
        'Fonction',
        'Entreprise',
        'niveau_etude'
    ];
}
