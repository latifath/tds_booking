<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    public function sluggable():array
    {
        return [
            'slug'=>[
                'source' => 'nom'
            ]
            ];
    }

    protected $fillable = [ 'slug', 'description', 'numero_matricule', 'marque', 'modele', 'vitesse', 'annee', 'Kilometrage', 'moteur', 'couleur', 'transmission', 'carburant', 'assurance_id', 'nbr_place', 'availability', 'media_id', 'type_voiture_id', 'visite_technique_id', 'created_at', 'updated_at' ];


    public function type_voiture()
    {
        return $this->belongsTo(TypeVoiture::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function visite_techniques()
    {
        return $this->belongsTo(VisitTechnique::class);
    }

    public function assurance()
    {
        return $this->belongsTo(Assurance::class);
    }

}
