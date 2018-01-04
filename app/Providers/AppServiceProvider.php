<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
use App\Config;
use App\HomeManagement;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = Config::all();
        $dataHome = HomeManagement::all();
        $configs = [];
        foreach ($config as $value){
            switch ($value->key_config) {
                case 'name':
                    $configs['name1'] = $value->value1;
                    $configs['name2'] = $value->value2;
                    break;
                case 'phone':
                    $configs['phone1'] = $value->value1;
                    $configs['phone2'] = $value->value2;
                    break;
                case 'address':
                    $configs['address1'] = $value->value1;
                    $configs['address2'] = $value->value2;
                    break;
                case 'location':
                    $configs['latitude'] = $value->value1;
                    $configs['longitude'] = $value->value2;
                    break;
                case 'email':
                    $configs['email1'] = $value->value1;
                    $configs['email2'] = $value->value2;
                    break;
            }
        }
        $configs = array_merge($configs,$dataHome->toArray());
        View::share('configs', $configs);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }
}
