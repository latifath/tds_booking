<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [ 'nom', 'prenom', 'email', 'password', 'telephone', 'permis_conduite', 'age', 'sexe', 'user_id','created_at', 'updated_at'];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reservation_hotels()
    {
        return $this->hasMany(ReservationHotel::class);
    }

    public function reservation_voitures()
    {
        return $this->hasMany(ReservationVoiture::class);
    }
}
