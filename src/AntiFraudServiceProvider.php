<?php

namespace BrainchildSoft\AntiFraud;
/*
* Author: Laravel Dev Bose
* Email: laravel.devbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

use Illuminate\Support\ServiceProvider;

class AntiFraudServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'antifraud');

    }

}
