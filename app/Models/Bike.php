<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'make',
        'model',
        'year',
        'mods',
        'picture',
        'builder_id'
    ];


    public function builder() {
        return $this->belongsTo(Builder::class);
    }

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function garages() {
        return $this->belongsToMany(Garage::class);
    }

    /*public function user() {
        return $this->belongsTo(User::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }*/
}
