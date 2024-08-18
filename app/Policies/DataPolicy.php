<?php

namespace App\Policies;

use App\Models\Data;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DataPolicy
{
    public function edit(User $user, Data $data): bool
    {
        return $data->user->is($user);
    }
}