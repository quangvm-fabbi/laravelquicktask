<?php

namespace App\Repositories\Task;

use App\User;

interface TasksRepositoryInterface
{
    public function forUser(User $user);
}
