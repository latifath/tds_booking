<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'montant', 'status', 'created_at', 'updated_at'];


    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function commande_menus()
    {
        return $this->hasMany(CommandeMenu::class);
    }


}
