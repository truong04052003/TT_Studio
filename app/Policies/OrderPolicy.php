<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
       return $user->hasPermission('Order_viewAny');
       //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
       return $user->hasPermission('Order_view');
       //
    }


    public function create(User $user)
    {
        //
    }

   
    public function update(User $user)
    {
        //
    }

   
    public function delete(User $user)
    {
        //
    }

   
    public function restore(User $user)
    {
        //
    }

   
    public function forceDelete(User $user)
    {
        //
    }
}