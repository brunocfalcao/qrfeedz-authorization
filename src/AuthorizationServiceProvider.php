<?php

namespace QRFeedz\Authorization;

use Illuminate\Support\ServiceProvider;
use QRFeedz\Authorization\Gates\CategoryGates;
use QRFeedz\Authorization\Gates\CountryGates;
use QRFeedz\Authorization\Gates\OrganizationGates;
use QRFeedz\Authorization\Gates\PlaceGates;
use QRFeedz\Authorization\Gates\QuestionGates;
use QRFeedz\Authorization\Gates\QuestionnaireGates;
use QRFeedz\Authorization\Gates\ResponseGates;
use QRFeedz\Authorization\Gates\TagGates;
use QRFeedz\Authorization\Gates\UserGates;
use QRFeedz\Authorization\Gates\WidgetGates;

class AuthorizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        TagGates::apply();
        UserGates::apply();
        PlaceGates::apply();
        WidgetGates::apply();
        CountryGates::apply();
        ResponseGates::apply();
        QuestionGates::apply();
        CategoryGates::apply();
        OrganizationGates::apply();
        QuestionnaireGates::apply();
    }

    public function register()
    {
        //
    }
}
