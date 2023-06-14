<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Group;
use QRFeedz\Cube\Models\User;

class GroupPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Group $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Group $model)
    {
        return true;
    }

    public function delete(User $user, Group $model)
    {
        return true;
    }

    public function restore(User $user, Group $model)
    {
        return true;
    }

    public function forceDelete(User $user, Group $model)
    {
        return true;
    }
}
