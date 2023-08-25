<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom', 'code', 'phone_code', 'flag', 'created_at', 'updated_at'];

}
