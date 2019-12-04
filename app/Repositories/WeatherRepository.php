<?php


namespace App\Repositories;


use App\Models\Weather;

class WeatherRepository implements WeatherRepositoryInterface
{
    public function findWeather(string $cityName, \DateTime $date = null): Weather
    {
        // TODO: Implement findWeather() method.
    }

    public function addWeather(array $attributes): int
    {
        // TODO: Implement addWeather() method.
    }

}
