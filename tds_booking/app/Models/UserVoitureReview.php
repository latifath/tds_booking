<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVoitureReview extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'voiture_id', 'rating', 'comment', 'status', 'created_at', 'updated_at' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }
}
