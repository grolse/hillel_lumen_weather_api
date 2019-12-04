<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Weather
 * @package App\Models
 *
 * @property
 */
class Weather extends Model
{
    protected $fillable = [
        'temperature',
        'temperature_feeling',
        'humidity',
        'pressure',
        'wind_speed',
        'wind_direction',
        'precipitation'
    ];
}
