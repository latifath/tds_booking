<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChambreUserReview extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'chambre_id', 'rating', 'comment', 'status', 'created_at', 'updated_at' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
}
