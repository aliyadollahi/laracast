<?php

// use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
//    $jobs =Job::all();
//     dd($jobs[3]->title);
   return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs', function ()  {
        $jobs = Job::with('employer')->paginate(5);
       return  view('jobs', [
        'jobs'=>$jobs,
       ]);

});
Route::get('/jobs/{id}' , function($id) {
// $jobs = [
//             [
//                 'id' => 1,
//                 'title' => 'Job Title',
//                 'name' => 'Job Name',
//                 'description' => 'Job Description',
//                 'skills'=>['PHP','Go','nodeJS','node_modules']
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Another Job Title',
//                 'name' => 'Another Job Name',
//                 'description' => 'Another Job Description',
//                 'skills'=>['PHP1','Go1','nodeJS1','node_modules1']
//             ],
//             [
//                 'id'=>3,
//                 'title' => 'Yet Another Job Title',
//                 'name' => 'Yet Another Job Name',
//                 'description' => 'Yet Another Job Description',
//                 'skills'=>['PHP2','Go2','nodeJS2','node_modules2']
//             ]
//             ];

            // Arr::first($jobs, function($job) use ($id){
            //     return $job['id'] == $id;
            // });
        //   $job =  Arr::first(Job::all(),fn ($job) => $job ['id'] == $id);
            $job = Job::find($id);

            // dd($job);

return view('job',['job'=>$job]);

});
