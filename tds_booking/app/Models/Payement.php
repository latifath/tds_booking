<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = [ 'reference', 'montant', 'type_paiement', 'reservation_hotel_id', 'created_at', 'updated_at' ];


    public function reservation_hotel()
    {
        return $this->belongsTo(ReservationHotel::class);
    }

}
