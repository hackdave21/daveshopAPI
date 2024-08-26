<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
       // Les attributs qui peuvent être remplis en masse
       protected $fillable = [
        'street',
        'city',
        'state',
        'zip_code',
        'country',
        'user_id',
    ];

    // Une adresse appartient à un utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Une adresse peut être associée à plusieurs commandes
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
