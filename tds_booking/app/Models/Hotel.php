<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
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

    protected $fillable = [ 'nom', 'slug', 'description', 'telephone1', 'telephone2', 'email', 'commune', 'ville', 'departement', 'adresse', 'localisation', 'code_postal','media_id', 'created_at', 'updated_at'];

    public function hotel_user_reviews()
    {
        return $this->hasMany(HotelUserReview::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }

}
