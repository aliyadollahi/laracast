<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/job', function () {
       return  view('job', [
        'jobs' => [
            [
                'title' => 'Job Title',
                'name' => 'Job Name',
                'description' => 'Job Description',
                'skills'=>['PHP','Go','nodeJS','node_modules']
            ],
            [
                'title' => 'Another Job Title',
                'name' => 'Another Job Name',
                'description' => 'Another Job Description',
                'skills'=>['PHP1','Go1','nodeJS1','node_modules1']
            ],
            [
                'title' => 'Yet Another Job Title',
                'name' => 'Yet Another Job Name',
                'description' => 'Yet Another Job Description',
                'skills'=>['PHP2','Go2','nodeJS2','node_modules2']
            ]
        ]

       ]);

});
