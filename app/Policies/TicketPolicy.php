<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

final class TicketPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_ticket');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  User  $user
     * @param  Ticket  $ticket
     * @return bool
     */
    public function view(User $user, Ticket $ticket): bool
    {
        return $user->can('view_ticket');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_ticket');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Ticket  $ticket
     * @return bool
     */
    public function update(User $user, Ticket $ticket): bool
    {
        return $user->can('update_ticket');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Ticket  $ticket
     * @return bool
     */
    public function delete(User $user, Ticket $ticket): bool
    {
        return $user->can('delete_ticket');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_ticket');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  User  $user
     * @param  Ticket  $ticket
     * @return bool
     */
    public function forceDelete(User $user, Ticket $ticket): bool
    {
        return $user->can('force_delete_ticket');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_ticket');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  User  $user
     * @param  Ticket  $ticket
     * @return bool
     */
    public function restore(User $user, Ticket $ticket): bool
    {
        return $user->can('restore_ticket');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_ticket');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  User  $user
     * @param  Ticket  $ticket
     * @return bool
     */
    public function replicate(User $user, Ticket $ticket): bool
    {
        return $user->can('replicate_ticket');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_ticket');
    }

}
