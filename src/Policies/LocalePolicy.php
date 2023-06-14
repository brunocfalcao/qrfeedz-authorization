<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Locale;
use QRFeedz\Cube\Models\User;

class LocalePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Locale $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Locale $model)
    {
        return true;
    }

    public function delete(User $user, Locale $model)
    {
        return true;
    }

    public function restore(User $user, Locale $model)
    {
        return true;
    }

    public function forceDelete(User $user, Locale $model)
    {
        return true;
    }
}
