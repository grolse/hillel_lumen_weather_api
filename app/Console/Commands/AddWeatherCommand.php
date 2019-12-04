<?php


namespace App\Console\Commands;

use App\Repositories\WeatherRepositoryInterface;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddWeatherCommand extends Command
{
    private $weatherRepository;

    public function __construct(WeatherRepositoryInterface $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
        parent::__construct();
    }

    protected $signature = 'weather:add';

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $temperature = $this->ask('Temperature');
        $tempFeeling = $this->ask('Feeling temperature');
        $humidity = $this->ask('Humidity');
        $windSpeed = $this->ask('Wind speed');
        $windDirection = $this->ask('Wind direction');
        $pressure = $this->ask('Pressure');
        $precipitation = $this->ask('Precipitation');

        $data = [
            'temperature' => $temperature,
            'temperature_feeling' => $tempFeeling,
            'humidity' => $humidity,
            'wind_speed' => $windSpeed,
            'wind_direction' => $windDirection,
            'pressure' => $pressure,
            'precipitation' =>$precipitation
        ];
        dd($data);
    }
}
