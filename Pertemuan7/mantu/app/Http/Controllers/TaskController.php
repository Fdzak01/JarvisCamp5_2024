<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //mendapatkan dan menampilkan data tugas
    public function index(){
        //mndapatkan data tugas dari model
        $tasks = Task::all();
        dd($tasks);

        //mengirim data tugas ke view
        return view("task.index",[
            'tasks' => $tasks,
        ]);
    }

    public function list(){
        $tasks = Task::all();
        return view('task.list' , compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(Request $request){

        // dd($request->all());
        
        $data = $request->validate([
            'name' => 'required|max:25|',
        ]);
    }
}
