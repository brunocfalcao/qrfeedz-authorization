<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Page;
use QRFeedz\Cube\Models\User;

class PagePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Page $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Page $model)
    {
        return true;
    }

    public function delete(User $user, Page $model)
    {
        return true;
    }

    public function restore(User $user, Page $model)
    {
        return true;
    }

    public function forceDelete(User $user, Page $model)
    {
        return true;
    }

    public function replicate(User $user, Page $model)
    {
        // Replication is disabled.
        return false;
    }
}
