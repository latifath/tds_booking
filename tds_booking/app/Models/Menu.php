<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [ 'nom', 'description', 'prix', 'media_id', 'created_at', 'updated_at' ];


    public function commandes_menus()
    {
        return $this->hasMany(CommandeMenu::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }


}
