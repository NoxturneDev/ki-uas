<?php
// app/Models/Car.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nickname',
        'serial_number',
        'status',
    ];

    /**
     * Get the season associated with the car.
     */
    public function season(): HasOne
    {
        return $this->hasOne(Season::class);
    }
}