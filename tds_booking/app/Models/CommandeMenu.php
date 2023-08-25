<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeMenu extends Model
{
    use HasFactory;

    protected $fillable = [ 'quantite', 'prix', 'description', 'menu_id', 'commande_id', 'created_at', 'updated_at'];

    public function menu()
    {
    return $this->belongsTo(Menu::class);
    }

    public function commande()
    {
    return $this->belongsTo(Commande::class);
    }

}
