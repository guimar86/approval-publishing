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

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Content $content): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        return $user->role === "author" ? Response::allow() : Response::denyAsNotFound();

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Content $content): Response
    {
        return $user->role === "author" && in_array($content->status, ['draft', 'rejected']) ? Response::allow() : Response::denyAsNotFound();
    }

    /**
     * Determine who can submit content
     * @param User $user
     * @param Content $content
     * @return Response
     */
    public function submit(User $user, Content $content): Response
    {
        return $user->role === "author" && $content->status === 'draft' ? Response::allow() : Response::denyAsNotFound();
    }

    /**
     * Determine who can review content
     * currently this applies for approval and rejection
     * @param User $user
     * @param Content $content
     * @return Response
     */
    public function review(User $user, Content $content): Response
    {
        return $user->role === "reviewer" ? Response::allow() : Response::denyAsNotFound();
    }

    /**
     * Determine who can publish content
     * @param User $user
     * @param Content $content
     * @return Response
     */
    public function publish(User $user, Content $content): Response
    {
        return $user->role === "admin" && $content->status === 'approved' ? Response::allow() : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Content $content): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Content $content): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Content $content): bool
    {
        return false;
    }
}
