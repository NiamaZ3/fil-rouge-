<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'quantite',
        'description',
        'prix',
        'categorie_id'
 ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function panier()
    {
        return $this->hasMany(Panier::class); 
    }
}
