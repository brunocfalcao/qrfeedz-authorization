<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Country;
use QRFeedz\Cube\Models\User;

class CountryPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Country $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Country $model)
    {
        return true;
    }

    public function delete(User $user, Country $model)
    {
        return true;
    }

    public function restore(User $user, Country $model)
    {
        return true;
    }

    public function forceDelete(User $user, Country $model)
    {
        return true;
    }
}
