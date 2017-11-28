<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlizzardUser extends Model
{
    protected $fillable = [
        'region',
        'battletag',
        'overall_stats',
        'heroes_stats',
        'heroes_playtime'
    ];
    protected $casts = [
        'overall_stats' => 'array',
        'heroes_stats' => 'array',
        'heroes_playtime' => 'array'
    ];
}
