<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moistures extends Model
{
    protected $fillable = [
        'value', // Ini merupakan column  yang didefinisikan
    ];
    use HasFactory;
}
