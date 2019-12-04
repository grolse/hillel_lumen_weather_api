<?php

namespace App\Repositories;

use App\Models\Weather;

interface WeatherRepositoryInterface
{
    public function findWeather(string $cityName, \DateTime $date = null): Weather;
    public function addWeather(array $attributes): int;
}
