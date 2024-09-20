<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model {
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'description',
        'commentaires'
    ];

    public function animals() {
        return $this->hasMany(Animal::class);
    }

    public function comments() {
        return $this->hasMany(Commentaire::class, 'animal_id');
    }
}
