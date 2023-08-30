<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Client;
use QRFeedz\Cube\Models\User;

class ClientPolicy
{
    public function viewAny(User $user)
    {
        // Anyone registered can view user resources.
        return true;
    }

    public function view(User $user, Client $model)
    {
        return
            // The user has an "affiliate" authorization on the client instance.
            $user->isAffiliateOf($model) ||

            // The user is a super admin.
            $user->isSuperAdmin() || (

                // The logged user belongs to the client instance.
                $model->id == $user->client_id &&

                // The logged user is "admin" on the client instance.
                $user->isAuthorizedAs($model, 'client-admin')
            );
    }

    public function create(User $user)
    {
        return
            // The user is an affiliate.
            $user->isAffiliate() ||

            // The user is a super admin.
            $user->isSuperAdmin();
    }

    public function update(User $user, Client $model)
    {
        return
            // The user has an "affiliate" authorization on the client instance.
            $user->isAffiliateOf($model) ||

            // The user is a super admin.
            $user->isSuperAdmin() || (

                // The logged user belongs to the client instance.
                $model->id == $user->client_id &&

                // The logged user is "admin" on the client instance.
                $user->isAuthorizedAs($model, 'client-admin')
            );
    }

    public function delete(User $user, Client $model)
    {
        // TODO.
        return false;
    }

    public function restore(User $user, Client $model)
    {
        // TODO.
        return true;
    }

    public function forceDelete(User $user, Client $model)
    {
        // TODO.
        return true;
    }
}
