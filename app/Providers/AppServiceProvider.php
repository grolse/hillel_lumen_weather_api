<?php

namespace App\Providers;

use App\Repositories\WeatherRepository;
use App\Repositories\WeatherRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(WeatherRepositoryInterface::class, WeatherRepository::class);
    }
}
