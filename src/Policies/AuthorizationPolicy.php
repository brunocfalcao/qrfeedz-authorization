<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Authorization;
use QRFeedz\Cube\Models\User;

class AuthorizationPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Authorization $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Authorization $model)
    {
        return true;
    }

    public function delete(User $user, Authorization $model)
    {
        return true;
    }

    public function restore(User $user, Authorization $model)
    {
        return true;
    }

    public function forceDelete(User $user, Authorization $model)
    {
        return true;
    }
}
