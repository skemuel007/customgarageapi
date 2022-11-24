<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'company',
        'bike_id'
    ];

    public function bike() {
        return $this->belongsTo(Bike::class);
    }
}
