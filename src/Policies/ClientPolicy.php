<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Client;
use QRFeedz\Cube\Models\User;

class ClientPolicy
{
    public function viewAny(User $user): bool
    {
        // Anyone registered can view user resources.
        return true;
    }

    public function view(User $user, Client $model): bool
    {
        return
            // The user has an "affiliate" authorization on the client instance.
            $user->isAuthorizedAs($model, 'affiliate') ||

            // The user is a super admin.
            $user->is_admin || (

                // The logged user belongs to the client instance.
                $model->id == $user->client_id &&

                // The logged user is "admin" on the client instance.
                $user->isAuthorizedAs($model, 'admin')
            );
    }

    public function create(User $user): bool
    {
        return
            // The user is an affiliate.
            $user->is_affiliate ||

            // The user is a super admin.
            $user->is_admin;
    }

    public function update(User $user, Client $model): bool
    {
        return
            // The user has an "affiliate" authorization on the client instance.
            $user->isAuthorizedAs($model, 'affiliate') ||

            // The user is a super admin.
            $user->is_admin || (

                // The logged user belongs to the client instance.
                $model->id == $user->client_id &&

                // The logged user is "admin" on the client instance.
                $user->isAuthorizedAs($model, 'admin')
            );
    }

    public function delete(User $user, Client $model): bool
    {
        // TODO.
        return false;
    }

    public function restore(User $user, Client $model): bool
    {
        // TODO.
        return true;
    }

    public function forceDelete(User $user, Client $model): bool
    {
        // TODO.
        return true;
    }
}
