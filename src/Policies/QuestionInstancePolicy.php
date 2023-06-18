<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\QuestionInstance;
use QRFeedz\Cube\Models\User;

class QuestionInstancePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, QuestionInstance $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, QuestionInstance $model)
    {
        return true;
    }

    public function delete(User $user, QuestionInstance $model)
    {
        return true;
    }

    public function restore(User $user, QuestionInstance $model)
    {
        return true;
    }

    public function forceDelete(User $user, QuestionInstance $model)
    {
        return true;
    }
}
