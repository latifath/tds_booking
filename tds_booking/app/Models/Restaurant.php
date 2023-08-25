<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
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

    protected $fillable = [ 'nom', 'slug', 'description', 'telephone1', 'telephone2', 'email', 'commune', 'ville', 'departement', 'adresse', 'localisation', 'code_postal', 'media_id', 'created_at', 'updated_at'];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function restaurant_user_reviews()
    {
        return $this->hasMany(RestaurantUserReview::class);
    }
}
