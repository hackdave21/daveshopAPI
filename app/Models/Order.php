<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // Définir les attributs qui peuvent
    protected $fillable = [
        'status',     
        'total',
        'payment_method'
    ];

    // Une commande appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Une commande peut avoir plusieurs items de commande
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Une commande peut avoir un paiement
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    // Une commande peut avoir une adresse de livraison
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
