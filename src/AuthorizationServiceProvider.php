<?php

namespace QRFeedz\Authorization;

use Illuminate\Support\ServiceProvider;
use QRFeedz\Authorization\Gates\CountryGates;
use QRFeedz\Authorization\Gates\UserGates;

class AuthorizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        CountryGates::apply();
        UserGates::apply();
    }

    public function register()
    {
        //
    }
}
