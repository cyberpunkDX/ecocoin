<?php

namespace App\Policies;

use App\Models\Media;
use App\Models\User;

class MediaPolicy
{
    /**
     * Determine whether the user can view the media.
     */
    public function view(User $user, Media $media)
    {
        return $user->id === $media->user_id;
    }

    /**
     * Determine whether the user can update the media.
     */
    public function update(User $user, Media $media)
    {
        return $user->id === $media->user_id;
    }

    /**
     * Determine whether the user can delete the media.
     */
    public function delete(User $user, Media $media)
    {
        return $user->id === $media->user_id;
    }
}
