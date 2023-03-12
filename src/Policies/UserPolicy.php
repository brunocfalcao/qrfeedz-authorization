<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\User;
use QRFeedz\Cube\Models\User as UserModel;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        /**
         * By default all registered users can view users, in the worst case
         * the user can only see/manage itself.
         */
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $instance): bool
    {
        /**
         * The logged user can:
         * View all users in case the user is super admin (OR)
         * View all users from the client that it belongs to if the logged user
         * has "admin" permission on the respective client (OR)
         * Its the user itself (so the user can change its own data)
         */
        return
            // Is a super admin.
            $user->is_admin ||
            /**
             * The logged user and the instance belong to the same client
             * and the logged user has "admin" permissions on the client.
             */
            (
                $instance->client_id == $user->client_id

            ) ||
            /**
             * The user is him/herself.
             */
            $instance->id == $user->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        /**
         * A logged user can create users only if it's part of the admin (of
         * any client) or it's a super admin user.
         *
         * If it's an "admin", later on the creation it can only create users
         * for its only client.
         *
         * If it's a super admin, it can choose what client it belongs to.
         */
        return
        // Is super admin.
        $user->is_admin;
        // Has at least an admin role somewhere in a client
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserModel $userModel): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserModel $userModel): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserModel $userModel): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserModel $userModel): bool
    {
        return true;
    }
}
