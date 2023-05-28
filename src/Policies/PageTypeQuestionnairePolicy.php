<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Page;
use QRFeedz\Cube\Models\User;

class PageTypeQuestionnairePolicy
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
    public function view(User $user, Page $model)
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
    public function update(User $user, Page $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Page $model)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Page $model)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Page $model)
    {
        return true;
    }
}
