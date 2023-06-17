<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\PageInstance;
use QRFeedz\Cube\Models\User;

class PageInstancePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, PageInstance $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, PageInstance $model)
    {
        return true;
    }

    public function delete(User $user, PageInstance $model)
    {
        return true;
    }

    public function restore(User $user, PageInstance $model)
    {
        return true;
    }

    public function forceDelete(User $user, PageInstance $model)
    {
        return true;
    }
}
