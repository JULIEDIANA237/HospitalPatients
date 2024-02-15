<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'patient_id',
        'nom',
        'prénom',
        'date_de_naissance',
        'sexe',
        'adresse',
        'numéro_de_téléphone',
        'email',
        'mot_de_passe',
        'antécédents_médicaux',
        'image',
    ];

    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];
}