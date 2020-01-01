<?php

namespace App\Repositories\Task;

use App\User;
use App\Task;
use App\Http\Requests\TaskRequest;
use App\Repositories\Task\TasksRepositoryInterface;
use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository implements TasksRepositoryInterface
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function getModel()
    {
        return Task::class;
    }

    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }

}
