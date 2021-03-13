<?php
namespace Lara\MyPack;
use Illuminate\Support\ServiceProvider;
use Lara\MyPack\Console\Commands\UserData;

class MypacketServiceProvider extends ServiceProvider{
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
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        if($this->app->runningInConsole()){
            $this->commands([
                UserData::class
            ]);
        }
    }
}