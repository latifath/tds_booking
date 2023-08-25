<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
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

    protected $fillable = [ 'nom', 'slug', 'description', 'telephone1', 'telephone2', 'email', 'commune', 'ville', 'departement', 'adresse', 'localisation', 'code_postal', 'created_at', 'updated_at'];

}
