<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //mendapatkan dan menampilkan data tugas
    public function index(){
        //mndapatkan data tugas dari model
        $tasks = Task::getALL();

        //mengirim data tugas ke view
        return view("task.index",[
            'tasks' => $tasks,
        ]);
    }
}
