<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'quantite',
        'description',
        'produit_id',
 ];

 public function produits()
    {
        return $this->belongsTo(produit::class);
    }

}
