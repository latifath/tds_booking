<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVoiture extends Model
{
    use HasFactory;

    protected $fillable = [ 'nom', 'created_at', 'updated_at' ];

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }

}
