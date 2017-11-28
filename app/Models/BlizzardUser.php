<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlizzardUser extends Model
{
    protected $fillable = [
        'region',
        'battletag',
        'quickplay',
        'competitive'
    ];
    protected $casts = [
        'quickplay' => 'array',
        'competitive' => 'array'
    ];
}
