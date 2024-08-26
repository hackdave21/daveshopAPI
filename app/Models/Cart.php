<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

     // Un panier appartient à un utilisateur
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     // Un panier peut avoir plusieurs items de panier
     public function cartItems()
     {
         return $this->hasMany(CartItem::class);
     }
}
