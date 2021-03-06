<?php

namespace App\Policies;

use App\Library;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LibraryPolicy
{

    public function before($user, $ability){

        if ($user->user === 'admin'){
            return true;
        }
    }



    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function view(User $user, Library $library)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function update(User $user, Library $library)
    {
        return($user->id === $library->user_id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function delete(User $user, Library $library)
    {
        return($user->id === $library->user_id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function restore(User $user, Library $library)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Library  $library
     * @return mixed
     */
    public function forceDelete(User $user, Library $library)
    {
        //
    }
}
