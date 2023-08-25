<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteTechnique extends Model
{
    use HasFactory;
    protected $fillable = [ 'numero_visite_techniques', 'nature', 'nom_agence', 'date_fin_valide', 'created_at', 'updated_at' ];

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
}
