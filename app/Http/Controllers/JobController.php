<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class JobController extends Controller
{
    public function index()
    {//$jobs = Job::with('employer')->get();
        //cursor based pagination is best for large datasets
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
        ]);
    }

    public function store()
    {

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function create(): View|Factory|Application
    {
        return view('jobs.create');
    }

    public function edit(Job $job)
    {

        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    public function update(Job $job)
    {
        //authorize
        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
        // authorize (on hold)
        //update the job
        //    $job = Job::findOrFail($job);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // persist
        //redirect to the Job page
        return redirect('/jobs/'.$job->id);
    }

    public function destroy(Job $job)
    {
        // validate
        // authorize

        //delete
        $job->delete();

        return redirect('/jobs');
    }
}
