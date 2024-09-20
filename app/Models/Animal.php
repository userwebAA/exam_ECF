<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model {
    use HasFactory;

    protected $fillable = [
        "nom",
        "image",
        "description",
        "habitat_id"
    ];

    public function habitat() {
        return $this->belongsTo(Habitat::class);
    }

    public function comments() {
        return $this->hasMany(Commentaire::class);
    }
}
