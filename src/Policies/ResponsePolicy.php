<?php

namespace QRFeedz\Authorization\Policies;

use QRFeedz\Cube\Models\Response;
use QRFeedz\Cube\Models\User;
use QRFeedz\Services\Facades\QRFeedz;

class ResponsePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Response $model)
    {
        return
            // User is super admin.
            $user->isSuperAdmin() ||
            (
                // User is allowed to access admin.
                $user->isAllowedAdminAccess() &&

                // The response is part of a client that belongs to the user.
                $model->questionInstance->pageInstance->questionnaire->client_id ==
                $user->client_id
            );
    }

    public function create(User $user)
    {
        /**
         * Responses can only be created by a frontend URL and only
         * if the questionnaire is correlated with the current visitor
         * session id (TODO).
         */
        return QRFeedz::inFrontend() && QRFeedz::hasValidSessionId();
    }

    public function update(User $user, Response $model)
    {
        /**
         * Responses can only be updated by the same visitor session id from
         * this questionnaire.
         */
        return QRFeedz::inFrontend() && QRFeedz::hasValidSessionId();
    }

    public function delete(User $user, Response $model)
    {
        /**
         * Responses can only be deleted by the same visitor session id from
         * this questionnaire. Still, it's important to understand that a
         * data deletion is not very normal. For instance, if a visitor clears
         * a textbox, then it might be considered a "delete value" or if the
         * visitor unchecks a star rating for instance.
         */
        return QRFeedz::inFrontend() && QRFeedz::hasValidSessionId();
    }

    public function restore(User $user, Response $model)
    {
        return false;
    }

    public function forceDelete(User $user, Response $model)
    {
        return false;
    }

    public function replicate(User $user, Response $model)
    {
        // Replication is disabled.
        return false;
    }
}
