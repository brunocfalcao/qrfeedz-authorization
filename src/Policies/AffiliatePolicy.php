<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Affiliate;
use QRFeedz\Cube\Models\User;

class AffiliatePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Affiliate $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Affiliate $model)
    {
        return true;
    }

    public function delete(User $user, Affiliate $model)
    {
        return true;
    }

    public function restore(User $user, Affiliate $model)
    {
        return true;
    }

    public function forceDelete(User $user, Affiliate $model)
    {
        return true;
    }
}
