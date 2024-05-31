<?php

namespace App\Http\Controllers;

use App\Models\Desc;
use Illuminate\Http\Request;

class DescController extends Controller
{
    //Mendapatkan dan menampilkan data mendetai dari tugas
    public function index(){
        $descs = Desc::getALL();

        return view("desc.index", [
            'descs' => $descs,
        ]);
    }

}
