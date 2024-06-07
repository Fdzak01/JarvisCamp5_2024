<?php
use App\Http\Controllers\DescController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

/**
 * HTTP method
 * 1. Get : Untuk menampilakan sesuatu
 * 2. push : Untuk menambahkan data
 * 3. Put : untuk mengubah data
 * 4 Delete : untuk menghapus data
 */


//membuat route baru, Route untuk menampilkan halaman data tugas

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/list', [TaskController::class, 'list'])->name('task.list');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');

Route::post('/tasks/store', [TaskController::class, 'create'])->name('task.store');

//membuat route baru, Route untuk menampilkan detail deskripsi

Route::get('/desc', [DescController::class,'index']);
