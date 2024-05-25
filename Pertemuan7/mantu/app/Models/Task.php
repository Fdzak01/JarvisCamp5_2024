<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //mendefinisikan data tugas
    
    protected static $task = [
        [
            'id' =>1,
            'name'=> 'Bahasa Inggris',
            'deadline' => '2024-05-29',
            'status'=> 'Belum Selesai',
            'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12'
        ],
        [
            'id' =>2,
            'name'=> 'Matematika',
            'deadline' => '2024-05-30',
            'status'=> 'Belum Selesai',
            'description' => 'Mengerjakan soal matematika di buku PR halaman 20-25. '
        ],
        [
            'id' =>3,
            'name'=> 'Fisika',
            'deadline' => '2024-05-31',
            'status'=> 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal fisika di buku PR halaman 30-35'
        ],

        [
            'id' =>4,
            'name'=> 'Fisika',
            'deadline' => '2024-05-31',
            'status'=> 'Belum Selesai',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem adipisci quo. Id, dolore quod tenetur est porro dignissimos tempore officiis amet? Hic accusantium minus nemo odit eaque repudiandae magnam asperiores sequi, quas ut illo totam dolor porro.
             Officia facere modi earum pariatur qui dignissimos aperiam quam, nostrum veritatis. Incidunt rerum, adipisci ullam veritatis sed, dolor explicabo voluptate beatae in vitae pariatur hic! Aliquid optio molestias odit ipsum voluptas. Officiis eum hic non assumenda est eaque possimus eveniet quasi repellat sint nostrum fugit quia consequatur odit, ipsum cupiditate explicabo atque.'
        ],
    ];

    //method untuk mendapatkan semua data tugas

    public static function getALL(){
        return self::$task;
    }
}
