<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Questionnaire;
use QRFeedz\Cube\Models\User;

class QuestionnairePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Questionnaire $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Questionnaire $model)
    {
        return true;
    }

    public function delete(User $user, Questionnaire $model)
    {
        return true;
    }

    public function restore(User $user, Questionnaire $model)
    {
        return true;
    }

    public function forceDelete(User $user, Questionnaire $model)
    {
        return true;
    }
}
