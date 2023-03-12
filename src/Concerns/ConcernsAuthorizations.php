<?php

namespace QRFeedz\Authorization\Concerns;

use Illuminate\Database\Eloquent\Model;
use QRFeedz\Cube\Models\Authorization;

/**
 * Very specific trait to help managing authorizations to qrfeedz users.
 */
trait ConcernsAuthorizations
{
    public function isAuthorized(string|array $permissions, array $entities)
    {
        return is_authorized($this, $permissions, $entities);
    }
}
