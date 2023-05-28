<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Locale;
use QRFeedz\Cube\Models\User;

class LocalePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Locale $model)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Locale $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Locale $model)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Locale $model)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Locale $model)
    {
        return true;
    }
}
