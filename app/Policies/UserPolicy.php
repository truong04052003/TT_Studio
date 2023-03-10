<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
 
    public function viewAny(User $user)
    {
        return $user->hasPermission('viewAny');
    }

    public function view(User $user)
    {
        return $user->hasPermission('view');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create');
    }


    public function update(User $user)
    {
        return $user->hasPermission('update');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete');
    }


    public function restore(User $user)
    {
        return $user->hasPermission('restore');
    }


    public function forceDelete(User $user)
    {
        return $user->hasPermission('forceDelete');
    }
}
