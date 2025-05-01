<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    protected $fillable = ['destination_id', 'name', 'location', 'phone_number', 'picture'];

}
