<?php

use QRFeedz\Cube\Models\User;

function is_authorized(User $user, array|string $policies, array|string $entities = []): bool
{
    $policies = is_string($policies) ? [$policies] : $policies;

    // Laravel collection returned.
    $permissions = $user->authorization;

    foreach ($policies as $policy) {
        $permissions = $permissions->where($policy, true);
    }

    if (is_array($entities)) {
        foreach ($entities as $entity => $entityId) {
            $permissions = $permissions->where($entity, $entityId);
        }

        return $permissions->count() > 0;
    }

    if (is_string($entities)) {
    }
}
