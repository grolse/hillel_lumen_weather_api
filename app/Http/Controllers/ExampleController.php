<?php

namespace App\Http\Controllers;

use App\Repositories\WeatherRepository;
use App\Repositories\WeatherRepositoryInterface;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(WeatherRepositoryInterface $weatherRepository)
    {
    }

    //
}
