<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class TaskController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store()
    {

        $attributes = $this->ValidateTask();
        Task::create($attributes);

        return redirect('/');
    }


    public function edit(Task $task)
    {
        return view('edit', ['task' => $task]);
    }

    public function update(Task $task)
    {
        $attributes = $this->ValidateTask();

        $task->update($attributes);

        return redirect('/');
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }


    protected function ValidateTask(?Task $task = null)
    {
        $task ??= new Task();
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }





}
