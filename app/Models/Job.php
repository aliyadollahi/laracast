<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Job{
    public static function all(): array {
        return [
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
    }

    public static function find( int $id): array
    {
        // foreach (self::all() as $job) {
        //     if ($job['id'] === $id) {
        //         return $job;
        //     }
        // }
        // return null;

        $job =  Arr::first(static::all(),fn ($job) => $job ['id'] == $id);
        if(! $job){
            abort(404);
        }
        return $job;

    }

}
