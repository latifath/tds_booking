<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelUserReview extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'hotel_id', 'rating', 'comment', 'status', 'created_at', 'updated_at' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
