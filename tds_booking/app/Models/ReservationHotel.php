<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationHotel extends Model
{
    use HasFactory;


    protected $fillable = [ 'date_debut', 'date_fin', 'capacite_adultes', 'capacite_enfants', 'chambre_id', 'client_id', 'numero','status', 'created_at', 'updated_at' ];

    public function payements()
    {
        return $this->hasMany(Payement::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
}
