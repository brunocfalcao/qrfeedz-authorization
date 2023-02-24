<?php

namespace QRFeedz\Authorization\Gates;

use Illuminate\Support\Facades\Gate;

class ResponseGates
{
    public static function apply()
    {
        /*
        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });
        */
    }
}
