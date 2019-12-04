<?php


namespace App\Http\Controllers;


use App\Repositories\WeatherRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WeatherController extends Controller
{
    private $weatherRepository;

    public function __construct(WeatherRepositoryInterface $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
    }

    public function getWeather(Request $request)
    {
        $this->validate($request, [
            'city' => 'required'
        ]);

        $city = $request->get('city');
        $date = $request->get('date', null);
        $weather = $this->weatherRepository->findWeather($city, $date);
        if (!$weather) {
            $message = (!$date) ? 'City not found' : 'City not found or invalid date';
            return response()->json([
                'error_message' => $message,
                'details' => $city
            ], Response::HTTP_NOT_FOUND);
        }
        return response()->json($weather);
    }
}
