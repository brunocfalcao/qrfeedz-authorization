<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Response;
use QRFeedz\Cube\Models\User;

class ResponsePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Response $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Response $model)
    {
        return true;
    }

    public function delete(User $user, Response $model)
    {
        return true;
    }

    public function restore(User $user, Response $model)
    {
        return true;
    }

    public function forceDelete(User $user, Response $model)
    {
        return true;
    }
}
