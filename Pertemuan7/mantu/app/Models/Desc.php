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
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Suscipit, ad fuga eos sunt quaerat dolore iure praesentium perspiciatis 
        porro ullam adipisci voluptatem! Voluptas, vel? Sint dolore harum esse voluptate 
        explicabo nihil consequuntur maxime incidunt natus consectetur quae, maiores perspiciatis at 
        officiis facilis commodi hic in vel. Eligendi unde fugiat rem?'
    ],
    [
        'id' =>2,
        'name'=> 'Matematika',
        'deadline' => '2024-05-30',
        'status'=> 'Belum Selesai',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Suscipit, ad fuga eos sunt quaerat dolore iure praesentium perspiciatis 
        porro ullam adipisci voluptatem! Voluptas, vel? Sint dolore harum esse voluptate 
        explicabo nihil consequuntur maxime incidunt natus consectetur quae, maiores perspiciatis at 
        officiis facilis commodi hic in vel. Eligendi unde fugiat rem?'
    ],
    [
        'id' =>3,
        'name'=> 'Fisika',
        'deadline' => '2024-05-31',
        'status'=> 'Belum Selesai',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Suscipit, ad fuga eos sunt quaerat dolore iure praesentium perspiciatis 
         porro ullam adipisci voluptatem! Voluptas, vel? Sint dolore harum esse voluptate 
         explicabo nihil consequuntur maxime incidunt natus consectetur quae, maiores perspiciatis at 
         officiis facilis commodi hic in vel. Eligendi unde fugiat rem?'
    ],

    [
        'id' =>4,
        'name'=> 'Bahasa Indonesia',
        'deadline' => '2024-05-31',
        'status'=> 'Belum Selesai',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi exercitationem adipisci quo. Id, dolore quod tenetur est porro dignissimos tempore officiis amet? Hic accusantium minus nemo odit eaque repudiandae magnam asperiores sequi, quas ut illo totam dolor porro.
         Officia facere modi earum pariatur qui dignissimos aperiam quam, nostrum veritatis. Incidunt rerum, adipisci ullam veritatis sed, dolor explicabo voluptate beatae in vitae pariatur hic! Aliquid optio molestias odit ipsum voluptas. Officiis eum hic non assumenda est eaque possimus eveniet quasi repellat sint nostrum fugit quia consequatur odit, ipsum cupiditate explicabo atque.'
    ]
    ];


    public static function getALL(){
        return self::$desc;
}
}
