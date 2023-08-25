<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [ 'date_reservation', 'client_id', 'numero', 'created_at', 'updated_at' ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
