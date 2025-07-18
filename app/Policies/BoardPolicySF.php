<?php

namespace App\Policies;

use App\Models\BoardSF;
use App\Models\UserSF;

class BoardPolicySF
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserSF $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserSF $user, BoardSF $board): bool
    {
        // Allow access if the user owns the board
        return $user->id === $board->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserSF $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserSF $user, BoardSF $board): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserSF $user, BoardSF $board): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserSF $user, BoardSF $board): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserSF $user, BoardSF $board): bool
    {
        return false;
    }
}
