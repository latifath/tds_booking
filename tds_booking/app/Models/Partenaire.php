<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
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

    protected $fillable = [ 'nom', 'slug', 'media_id', 'created_at', 'updated_at'];
}
