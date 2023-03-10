<?php

namespace QRFeedz\Authorization;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use QRFeedz\Authorization\Gates\AuthorizationGates;
use QRFeedz\Authorization\Gates\CategoryGates;
use QRFeedz\Authorization\Gates\ClientGates;
use QRFeedz\Authorization\Gates\CountryGates;
use QRFeedz\Authorization\Gates\GroupGates;
use QRFeedz\Authorization\Gates\LocaleGates;
use QRFeedz\Authorization\Gates\QuestionGates;
use QRFeedz\Authorization\Gates\QuestionnaireGates;
use QRFeedz\Authorization\Gates\ResponseGates;
use QRFeedz\Authorization\Gates\TagGates;
use QRFeedz\Authorization\Gates\UserGates;
use QRFeedz\Authorization\Gates\WidgetGates;
use QRFeedz\Authorization\Policies\CategoryPolicy;
use QRFeedz\Authorization\Policies\ClientPolicy;
use QRFeedz\Authorization\Policies\CountryPolicy;
use QRFeedz\Authorization\Policies\GroupPolicy;
use QRFeedz\Authorization\Policies\LocalePolicy;
use QRFeedz\Authorization\Policies\QuestionnairePolicy;
use QRFeedz\Authorization\Policies\QuestionPolicy;
use QRFeedz\Authorization\Policies\ResponsePolicy;
use QRFeedz\Authorization\Policies\TagPolicy;
use QRFeedz\Authorization\Policies\UserPolicy;
use QRFeedz\Authorization\Policies\WidgetPolicy;
use QRFeedz\Cube\Models\Category;
use QRFeedz\Cube\Models\Client;
use QRFeedz\Cube\Models\Country;
use QRFeedz\Cube\Models\Group;
use QRFeedz\Cube\Models\Locale;
use QRFeedz\Cube\Models\Question;
use QRFeedz\Cube\Models\Questionnaire;
use QRFeedz\Cube\Models\Tag;
use QRFeedz\Cube\Models\User;
use QRFeedz\Cube\Models\Widget;

class AuthorizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerGates();
        $this->registerPolicies();
    }

    public function register()
    {
        //
    }

    protected function registerGates()
    {
        TagGates::apply();
        UserGates::apply();
        GroupGates::apply();
        WidgetGates::apply();
        CountryGates::apply();
        LocaleGates::apply();
        ResponseGates::apply();
        QuestionGates::apply();
        CategoryGates::apply();
        ClientGates::apply();
        AuthorizationGates::apply();
        QuestionnaireGates::apply();
    }

    protected function registerPolicies(): void
    {
        Gate::policy(Tag::class, TagPolicy::class);
        Gate::policy(User::class, UserPolicy::class);
        Gate::policy(Group::class, GroupPolicy::class);
        Gate::policy(Widget::class, WidgetPolicy::class);
        Gate::policy(Locale::class, LocalePolicy::class);
        Gate::policy(Country::class, CountryPolicy::class);
        Gate::policy(Question::class, QuestionPolicy::class);
        Gate::policy(Category::class, CategoryPolicy::class);
        Gate::policy(Response::class, ResponsePolicy::class);
        Gate::policy(Client::class, ClientPolicy::class);
        Gate::policy(Questionnaire::class, QuestionnairePolicy::class);
    }
}
