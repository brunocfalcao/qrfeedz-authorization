<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Category;
use QRFeedz\Cube\Models\User;

class CategoryPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Category $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Category $model)
    {
        return true;
    }

    public function delete(User $user, Category $model)
    {
        return true;
    }

    public function restore(User $user, Category $model)
    {
        return true;
    }

    public function forceDelete(User $user, Category $model)
    {
        return true;
    }
}
