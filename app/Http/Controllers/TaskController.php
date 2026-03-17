<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
    //dd(Task::all());

       $data =  ['name' => 'Adam'];
       return view('task', $data);
    }

     public function show()
    {
       $data =  ['name' => 'Formularz dodania'];
       return view('task-add', $data);
    }

    public function store(Request $request)
{
   //dd($request);
    $request->validate([
        'name' => 'required|string|max:255',
    ]);
   // dd($request->all());
    Task::create(['name' => $request['name']]);
    return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
}
}
