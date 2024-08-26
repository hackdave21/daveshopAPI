<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'rating',
        'comment',
    ];

    // Une évaluation appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Une évaluation appartient à un produit
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
