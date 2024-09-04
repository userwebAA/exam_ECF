<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heure extends Model {
    use HasFactory;

    protected $fillable = [
        'jour',
        'heure_ouverture',
        'heure_fermeture',
        'ouverture'
    ];
}
