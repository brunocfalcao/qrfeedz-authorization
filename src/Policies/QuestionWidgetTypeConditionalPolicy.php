<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\QuestionWidgetTypeConditional;
use QRFeedz\Cube\Models\User;

class QuestionWidgetTypeConditionalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, QuestionWidgetTypeConditional $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, QuestionWidgetTypeConditional $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, QuestionWidgetTypeConditional $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, QuestionWidgetTypeConditional $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, QuestionWidgetTypeConditional $model): bool
    {
        return true;
    }
}