<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
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

    protected $fillable = [ 'nom', 'slug', 'description', 'night', 'nombre_lit', 'numero', 'superficie', 'availability', 'media_id', 'type_chambre_id', 'hotel_id', 'created_at', 'updated_at' ];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function type_chambre()
    {
        return $this->belongsTo(TypeChambre::class);
    }

    public function hotel()
    {
    return $this->belongsTo(Hotel::class);
    }

}
