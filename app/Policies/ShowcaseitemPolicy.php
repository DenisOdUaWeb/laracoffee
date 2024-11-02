<?php

namespace App\Policies;

use App\Models\Showcaseitem;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ShowcaseitemPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->email, [
            'admin@admin.com',
            'admin2@admin2.com',
        ]);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Showcaseitem $showcaseitem): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return in_array($user->email, [
            'admin@admin.com',
            'admin2@admin2.com',
        ]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Showcaseitem $showcaseitem): bool
    {
        return in_array($user->email, [
            'admin@admin.com',
            'admin2@admin2.com',
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Showcaseitem $showcaseitem): bool
    {
        return in_array($user->email, [
            'admin@admin.com',
            'admin2@admin2.com',
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Showcaseitem $showcaseitem): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Showcaseitem $showcaseitem): bool
    {
        //
    }
}
