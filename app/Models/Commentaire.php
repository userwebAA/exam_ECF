<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model {
    use HasFactory;

    protected $fillable = [
        "user_id",
        "animal_id",
        "description",
        "type"
    ];

    public function veterinaire() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
