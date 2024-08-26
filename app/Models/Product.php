<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     // Définir les attributs qui peuvent être assignés en masse
     protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];

    // Un produit appartient à une catégorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un produit appartient à un utilisateur (marchand)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un produit peut avoir plusieurs évaluations
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    // Un produit peut apparaître dans plusieurs items de commande
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
