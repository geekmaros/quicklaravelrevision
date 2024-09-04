Laravel Notes

PHP artisan make:migration this creates the table template for our table and it naming convention is create_xxx__stuff

PHP artisan migrate : this creates the migration table for our app
PHP artisan make:model for our modek

Factory is used to create mock dsta

PHP artisan tinker to use the artisan clip
App\Models\User::factory()->count()-> create() to use the factory
Has manybelongto many

We can replace Job::find(ID) wit
Route::delete('/jobs/{job}', function (Job $job) {}
Where $job is an instance of Job model
We can use $job->update, delete

PHP artisan make:controller to make a controller
PHP artisan make model -mf

Using a resource controller like in line 8 is the same as using the following code:
we can pass an optional third argument to the resource method to only register the desired routes
using the except or only methods passing it as an array e.g except(['create', 'edit'])

we also used the laravel-debugger package to debug our queries
[Link to Package](https://github.com/barryvdh/laravel-debugbar)

```
Route::resource('jobs', JobController::class);

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});


Route::get('/jobs', [JobController::class, 'index']);


Route::get('/jobs/create', [JobController::class, 'create']);


Route::get('/jobs/{job}', [JobController::class, 'show']);


Route::post('/jobs', [JobController::class, 'store']);


Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);


Route::patch('/jobs/{job}', [JobController::class, 'update']);

Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs', function () {
    we replaced Job::all() with Job::with('employer')->get() so as to eager load the employer relationship
     and reduce the number of queries

    $jobs = Job::with('employer')->get();
    cursor based pagination is best for large datasets
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});
```

laravel new appname

php artisan make:controller ControllerName

php artisan make:policy JobPolicy

Policy in laravel is used to make policy for accessing a particular resources
meaning that policy to enable access to view and edit
