<?php
// app/Models/Team.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'base_location',
        'team_principal',
        'chassis_name',
        'power_unit',
    ];

    /**
     * Get the seasons the team has participated in.
     */
    public function seasons(): HasMany
    {
        return $this->hasMany(Season::class);
    }
}