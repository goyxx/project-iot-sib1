<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humidities extends Model
{
    protected $fillable = [
        'value', // Ini merupakan column  yang didefinisikan
    ];
    use HasFactory;
}
