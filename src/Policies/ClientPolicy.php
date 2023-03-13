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
            // The user is a super admin.
            $user->is_admin || (

                // The instance and the user belong to the same client.
                $model->id == $user->client_id &&

                // The user has an "admin" authorization on this client.
                $user->isAuthorizedAs($user->client, 'admin')
            );
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Client $model): bool
    {
        return true;
    }

    public function delete(User $user, Client $model): bool
    {
        return true;
    }

    public function restore(User $user, Client $model): bool
    {
        return true;
    }

    public function forceDelete(User $user, Client $model): bool
    {
        return true;
    }
}
