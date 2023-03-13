<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        // Anyone registered can view user resources.
        return true;
    }

    public function view(User $user, User $model): bool
    {
        return
            // The user is a super admin.
            $user->is_admin ||
            (
                // The instance and the user belong to the same client.
                $model->client_id == $user->client_id &&

                // The user has an "admin" authorization on this client.
                $user->isAuthorizedAs($user->client, 'admin')

            ) ||
            // The user is himself.
            $model->id == $user->id;
    }

    public function create(User $user): bool
    {
        return
            // The user is a super admin.
            $user->is_admin ||

            // The user has an "admin" authorization on this client.
            $user->isAuthorizedAs($user->client, 'admin');
    }

    public function update(User $user, User $model): bool
    {
        return
            // The user is a super admin.
            $user->is_admin ||

            // The user is himself.
            $model->id == $user->id ||

            // The user has an "admin" authorization on this client.
            $user->isAuthorizedAs($user->client, 'admin');
    }

    public function delete(User $user, User $model): bool
    {
        return
            (
                // The user is a super admin.
                $user->is_admin ||

                // The user has an "admin" authorization on this client.
                $user->isAuthorizedAs($user->client, 'admin')
            ) &&

            // The user cannot delete himself.
            $user->id != $model->id;
    }

    public function restore(User $user, User $model): bool
    {
        return
            // The user is a super admin.
            $user->is_admin ||

            // The user has an "admin" authorization on this client.
            $user->isAuthorizedAs($user->client, 'admin');
    }

    public function forceDelete(User $user, User $model): bool
    {
        // The user is a super admin.
        return $user->is_admin;
    }
}
