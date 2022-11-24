<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;

    protected $table = 'garages';

    protected $fillable = [
        'name',
        'customer_level'
    ];

    public function bikes() {
        return $this->belongsToMany(Bike::class, 'bike_garage', 'bike_id', 'garage_id');
    }
}
