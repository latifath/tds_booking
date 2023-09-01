<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function reservation_hotels()
    {
        return $this->hasMany(ReservationHotel::class);
    }

    public function estDisponible(Carbon $dateDebut, Carbon $dateFin)
    {
        return !$this->reservation_hotels()
            ->where(function ($query) use ($dateDebut, $dateFin) {
                $query->whereBetween('date_debut', [$dateDebut, $dateFin])
                    ->orWhereBetween('date_fin', [$dateDebut, $dateFin])
                    ->orWhere(function ($orQuery) use ($dateDebut, $dateFin) {
                        $orQuery->where('date_debut', '<=', $dateDebut)
                            ->where('date_fin', '>=', $dateFin);
                    });
            })
            ->exists();
    }

}
