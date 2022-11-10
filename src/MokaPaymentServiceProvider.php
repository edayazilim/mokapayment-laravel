<?php

namespace Paradiseofcode\MokaPayment;

use Closure;
use Illuminate\Support\ServiceProvider;

class MokaPaymentServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/mokapayment.php' => config_path('mokapayment.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(MokaPayment::class,function (){
            return new MokaPayment();
        });
    }
}
