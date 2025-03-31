<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class job{

    public static function all():array
    {
        return [
            [
                'id'  => '1',
                'title' => 'Director',
                'salary' => '$30,000'
            ],
            [
                'id'  => '2',
                'title' => 'Programmer',
                'salary' => '$40,000'
            ],
            [
                'id'  => '3',
                'title' => 'Teacher',
                'salary' => '$50,000'
            ]

            ];
        } 
}

      


Route::get('/', function () {
    return view ('home');
});


Route::get('/jobs', function() {
    return view('jobs',
    ['jobs' => job::all()
    
     ]);
});


Route::get('/jobs/{id}' ,function ($id) {

    
    $job =    Arr::first(job::all(), fn($job) => $job['id'] === $id);
   
    return view ('job',['job' =>$job]);
});

Route::get('/contact' ,function (){
    return view ('contact');
});