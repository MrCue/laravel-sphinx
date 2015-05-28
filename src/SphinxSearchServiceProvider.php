<?php 
namespace MrCue\LaravelSphinx;

class SphinxSearchServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app['sphinxsearch'] = $this->app->share(function ($app) {
            return new SphinxSearch;
        });
    }
}