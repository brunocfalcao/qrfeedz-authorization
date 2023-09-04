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
        return false;
    }

    public function update(User $user, Country $model)
    {
        return false;
    }

    public function delete(User $user, Country $model)
    {
        return false;
    }

    public function restore(User $user, Country $model)
    {
        return false;
    }

    public function forceDelete(User $user, Country $model)
    {
        return false;
    }

    public function replicate(User $user, Country $model)
    {
        // Replication is disabled for clients.
        return false;
    }

    public function addLocation(User $user, Country $model)
    {
        return false;
    }
}
