<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
     //les attributs
     protected $fillable = [
        'order_id',
        'amount',
        'payment_date',
        'payment_method',
    ];

    // Un paiement appartient à une commande
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
