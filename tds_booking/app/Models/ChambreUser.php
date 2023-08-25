<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChambreUser extends Model
{
    use HasFactory;

    protected $fillable = [ 'numero_assurance', 'nom_agence', 'date_debut', 'date_fin', 'created_at', 'updated_at'];

}
