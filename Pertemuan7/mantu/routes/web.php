<?php
use App\Http\Controllers\DescController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * HTTP method
 * 1. Get : Untuk menampilakan sesuatu
 * 2. push : Untuk menambahkan data
 * 3. Put : untuk mengubah data
 * 4 Delete : untuk mengahpus data
 */


//membuat route baru, Route untuk menampilkan halaman data tugas

Route::get('/tasks', [TaskController::class, 'index']);

//membuat route baru, Route untuk menampilkan detail deskripsi

Route::get('/desc', [DescController::class,'index']);