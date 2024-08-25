<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

Route::get('/jobs', function () {
    //we replaced Job::all() with Job::with('employer')->get() so as to eager load the employer relationship
    // and reduce the number of queries

    //$jobs = Job::with('employer')->get();
    //cursor based pagination is best for large datasets
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs', [
        'jobs' => $jobs,
    ]);
});
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
