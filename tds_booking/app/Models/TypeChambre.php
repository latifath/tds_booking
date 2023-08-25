<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeChambre extends Model
{
    use HasFactory;

    protected $fillable = [ 'nom', 'created_at', 'updated_at' ];

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }
}
