<?php

namespace App\Policies;

use App\Models\Content;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ContentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return $user->hasRole('author');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Content $content): bool
    {
        return false;
    }

    public function submit(User $user, Content $content): bool
    {
        return $user->hasRole('author')
            && in_array($content->status, ['draft']);
    }

    public function review(User $user, Content $content): bool
    {
        return $user->hasRole('reviewer')
            && $content->status === 'pending';
    }

    public function publish(User $user, Content $content): bool
    {
        return $user->hasRole('admin')
            && $content->status === 'approved';
    }

    public function edit(User $user, Content $content): bool
    {
        return $user->id === $content->author_id
            && in_array($content->status, ['draft', 'rejected']);
    }

}
