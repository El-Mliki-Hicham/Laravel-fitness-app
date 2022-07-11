<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exercices_de_jours extends Model
{
    use HasFactory;

    protected $table = 'exercices_de_jours';

    protected $fillable    =["categorie_id", "jour_id","exercice_id"];
    
}

