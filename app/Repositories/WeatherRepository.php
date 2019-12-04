<?php


namespace App\Repositories;


use App\Models\Weather;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class WeatherRepository implements WeatherRepositoryInterface
{
    /**
     * @var Weather
     */
    private $weather;

    public function __construct()
    {
        $this->weather = app()->make(Weather::class);
    }

    public function findWeather(string $cityName, string $date = null): ?Weather
    {
        $weather = $this->weather->where('city', $cityName);
        if ($date) {
            $weather->where(DB::raw('DATE(created_at)'), '=', $date);
        }
        return $weather->first();
    }

    public function addWeather(array $attributes): int
    {
        $weather = $this->weather->newInstance($attributes);
        $weather->save();
        return $weather->id;
    }
}
