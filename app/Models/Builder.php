<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location'
    ];

    public function bike() {
        return $this->hasOne(Bike::class);
    }
}
