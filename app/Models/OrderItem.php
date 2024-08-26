<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    //les attributs
    protected $fillable = [
        'quantity',  
        'price',
    ];

    // Un item de commande appartient à une commande
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Un item de commande appartient à un produit
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
