<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Location;
use QRFeedz\Cube\Models\User;

class LocationPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Location $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Location $model)
    {
        return true;
    }

    public function delete(User $user, Location $model)
    {
        return true;
    }

    public function restore(User $user, Location $model)
    {
        return true;
    }

    public function forceDelete(User $user, Location $model)
    {
        return true;
    }
}
