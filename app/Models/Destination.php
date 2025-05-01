<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    // app/Models/Destination.php
public function resorts()
{
    return $this->hasMany(Resort::class);
}

    protected $fillable = [
        'name',
        'picture',
    ];
}
