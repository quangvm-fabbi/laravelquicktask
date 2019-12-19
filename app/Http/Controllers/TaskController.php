<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Task\TaskRepository;
use App\Repositories\Task\TasksRepositoryInterface;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TasksRepositoryInterface  $tasks)
    {
        $this->tasks = $tasks;
    }

    public function index()
    {
        $tasks = $this->tasks->getAll();

        return view('tasks.index', compact('tasks'));
    }

    public function store(TaskRequest $request)
    {
        $data = $request->all();
        $tasks = $this->tasks->create($data);

        return redirect(route('tasks.index'))->with('message', trans('setting.add_success'));
    }

    public function destroy($id)
    {
        try
        {
            $tasks = $this->tasks->delete($id);

            return redirect(route('tasks.index'))->with('message', trans('setting.delete_success'));
        }
        catch (ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
    }
}
