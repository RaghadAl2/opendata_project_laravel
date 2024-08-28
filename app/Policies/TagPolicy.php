<?php

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TagPolicy
{
    public function edit(User $user, Tag $tag): bool
    {
      
        return $tag->user->is($user);
    }
}