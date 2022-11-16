<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('bling', function ($options) {
            $options = array_merge($options, ['apikey' => config('bling.apikey')]);

            return Http::baseUrl('https://bling.com.br/Api/v2')->withOptions(['query' => $options])->withHeaders([
                'Content-Type' => 'text/xml;charset=utf-8',
            ])->acceptJson();
        });
    }
}
