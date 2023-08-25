<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [ 'filename', 'mimetype', 'created_at', 'updated_at' ];


    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
}
