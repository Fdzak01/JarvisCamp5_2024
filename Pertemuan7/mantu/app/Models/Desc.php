<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desc extends Model
{
    use HasFactory;

    protected static $desc = [
    [
        'id' =>1,
        'name'=> 'Bahasa Inggris',
        'deadline' => '2024-05-29',
        'status'=> 'Belum Selesai',
        'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12'
    ],
    [
        'id' =>1,
        'name'=> 'Bahasa Inggris',
        'deadline' => '2024-05-29',
        'status'=> 'Belum Selesai',
        'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12'
    ]
    ];


    public static function getALL(){
        return self::$desc;
}
}
