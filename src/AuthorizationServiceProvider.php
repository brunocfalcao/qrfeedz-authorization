<?php

namespace QRFeedz\Authorization;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use QRFeedz\Authorization\Gates\AffiliateGates;
use QRFeedz\Authorization\Gates\AuthorizationGates;
use QRFeedz\Authorization\Gates\CategoryGates;
use QRFeedz\Authorization\Gates\ClientGates;
use QRFeedz\Authorization\Gates\CountryGates;
use QRFeedz\Authorization\Gates\GroupGates;
use QRFeedz\Authorization\Gates\LocaleGates;
use QRFeedz\Authorization\Gates\OpenAIPromptGates;
use QRFeedz\Authorization\Gates\PageGates;
use QRFeedz\Authorization\Gates\PageInstanceGates;
use QRFeedz\Authorization\Gates\QuestionInstanceGates;
use QRFeedz\Authorization\Gates\QuestionnaireGates;
use QRFeedz\Authorization\Gates\QuestionWidgetTypeConditionalGates;
use QRFeedz\Authorization\Gates\ResponseGates;
use QRFeedz\Authorization\Gates\TagGates;
use QRFeedz\Authorization\Gates\UserGates;
use QRFeedz\Authorization\Gates\WidgetGates;
use QRFeedz\Authorization\Gates\WidgetInstanceGates;
use QRFeedz\Authorization\Policies\AffiliatePolicy;
use QRFeedz\Authorization\Policies\CategoryPolicy;
use QRFeedz\Authorization\Policies\ClientPolicy;
use QRFeedz\Authorization\Policies\CountryPolicy;
use QRFeedz\Authorization\Policies\GroupPolicy;
use QRFeedz\Authorization\Policies\LocalePolicy;
use QRFeedz\Authorization\Policies\OpenAIPromptPolicy;
use QRFeedz\Authorization\Policies\PageInstancePolicy;
use QRFeedz\Authorization\Policies\PagePolicy;
use QRFeedz\Authorization\Policies\QuestionnairePolicy;
use QRFeedz\Authorization\Policies\QuestionWidgetConditionalPolicy;
use QRFeedz\Authorization\Policies\ResponsePolicy;
use QRFeedz\Authorization\Policies\TagPolicy;
use QRFeedz\Authorization\Policies\UserPolicy;
use QRFeedz\Authorization\Policies\WidgetInstancePolicy;
use QRFeedz\Authorization\Policies\WidgetPolicy;
use QRFeedz\Cube\Models\Affiliate;
use QRFeedz\Cube\Models\Category;
use QRFeedz\Cube\Models\Client;
use QRFeedz\Cube\Models\Country;
use QRFeedz\Cube\Models\Group;
use QRFeedz\Cube\Models\Locale;
use QRFeedz\Cube\Models\OpenAIPrompt;
use QRFeedz\Cube\Models\Page;
use QRFeedz\Cube\Models\PageInstance;
use QRFeedz\Cube\Models\QuestionInstance;
use QRFeedz\Cube\Models\Questionnaire;
use QRFeedz\Cube\Models\QuestionWidgetConditional;
use QRFeedz\Cube\Models\Tag;
use QRFeedz\Cube\Models\User;
use QRFeedz\Cube\Models\Widget;
use QRFeedz\Cube\Models\WidgetInstance;

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
        PageGates::apply();
        GroupGates::apply();
        WidgetGates::apply();
        LocaleGates::apply();
        ClientGates::apply();
        WidgetGates::apply();
        CountryGates::apply();
        ResponseGates::apply();
        CategoryGates::apply();
        AffiliateGates::apply();
        PageInstanceGates::apply();
        OpenAIPromptGates::apply();
        AuthorizationGates::apply();
        QuestionnaireGates::apply();
        WidgetInstanceGates::apply();
        QuestionInstanceGates::apply();
        QuestionWidgetTypeConditionalGates::apply();
    }

    protected function registerPolicies()
    {
        Gate::policy(Tag::class, TagPolicy::class);
        Gate::policy(Page::class, PagePolicy::class);
        Gate::policy(User::class, UserPolicy::class);
        Gate::policy(Group::class, GroupPolicy::class);
        Gate::policy(Widget::class, WidgetPolicy::class);
        Gate::policy(Locale::class, LocalePolicy::class);
        Gate::policy(Client::class, ClientPolicy::class);
        Gate::policy(Country::class, CountryPolicy::class);
        Gate::policy(Category::class, CategoryPolicy::class);
        Gate::policy(PageInstance::class, PageInstancePolicy::class);
        Gate::policy(Response::class, ResponsePolicy::class);
        Gate::policy(WidgetInstance::class, WidgetInstancePolicy::class);
        Gate::policy(Affiliate::class, AffiliatePolicy::class);
        Gate::policy(OpenAIPrompt::class, OpenAIPromptPolicy::class);
        Gate::policy(Questionnaire::class, QuestionnairePolicy::class);
        Gate::policy(QuestionInstance::class, QuestionInstancePolicy::class);
        Gate::policy(QuestionWidgetConditional::class, QuestionWidgetConditionalPolicy::class);
    }
}
