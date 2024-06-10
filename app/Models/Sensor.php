<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{

    protected $fillable = [
        'type',
        'value'
    ];
    use HasFactory;
}