<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\User;
use QRFeedz\Cube\Models\WidgetInstanceConditional;

class WidgetInstanceConditionalPolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, WidgetInstanceConditional $model)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, WidgetInstanceConditional $model)
    {
        return true;
    }

    public function delete(User $user, WidgetInstanceConditional $model)
    {
        return true;
    }

    public function restore(User $user, WidgetInstanceConditional $model)
    {
        return true;
    }

    public function forceDelete(User $user, WidgetInstanceConditional $model)
    {
        return true;
    }
}
