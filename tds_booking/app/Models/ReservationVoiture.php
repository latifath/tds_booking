<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationVoiture extends Model
{
    use HasFactory;

    protected $fillable = [ 'date_arriv', 'date_depart', 'duration', 'montant', 'chauffeur', 'kilometrage', 'client_id', 'numero','status', 'created_at', 'updated_at' ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
