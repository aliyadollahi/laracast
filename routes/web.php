<?php

use Illuminate\Support\Arr;
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
Route::get('/jobs', function () {
       return  view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Job Title',
                'name' => 'Job Name',
                'description' => 'Job Description',
                'skills'=>['PHP','Go','nodeJS','node_modules']
            ],
            [
                'id' => 2,
                'title' => 'Another Job Title',
                'name' => 'Another Job Name',
                'description' => 'Another Job Description',
                'skills'=>['PHP1','Go1','nodeJS1','node_modules1']
            ],
            [
                'id'=>3,
                'title' => 'Yet Another Job Title',
                'name' => 'Yet Another Job Name',
                'description' => 'Yet Another Job Description',
                'skills'=>['PHP2','Go2','nodeJS2','node_modules2']
            ]
        ]

       ]);

});
Route::get('/jobs/{id}' , function($id){
$jobs = [
            [
                'id' => 1,
                'title' => 'Job Title',
                'name' => 'Job Name',
                'description' => 'Job Description',
                'skills'=>['PHP','Go','nodeJS','node_modules']
            ],
            [
                'id' => 2,
                'title' => 'Another Job Title',
                'name' => 'Another Job Name',
                'description' => 'Another Job Description',
                'skills'=>['PHP1','Go1','nodeJS1','node_modules1']
            ],
            [
                'id'=>3,
                'title' => 'Yet Another Job Title',
                'name' => 'Yet Another Job Name',
                'description' => 'Yet Another Job Description',
                'skills'=>['PHP2','Go2','nodeJS2','node_modules2']
            ]
            ];

            // Arr::first($jobs, function($job) use ($id){
            //     return $job['id'] == $id;
            // });
          $job =  Arr::first($jobs,fn ($job) => $job ['id'] == $id);

            // dd($job);

return view('job',['job'=>$job]);

});
