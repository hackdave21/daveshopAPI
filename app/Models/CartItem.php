<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    /**
     * Relation: Un item de panier appartient à un panier.
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Relation: Un item de panier appartient à un produit.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
