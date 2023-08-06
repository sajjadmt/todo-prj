<?php

namespace App\Policies;

use App\Enums\UserType;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class TodoCreatePolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return Auth::user()->user_type === UserType::Admin->value;
    }

}
