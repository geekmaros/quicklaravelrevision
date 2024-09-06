<div>
    <h2>
        {{ $job->title }}
    </h2>
    <p>Congrats on creating a new Job Your Job is on our database</p>
    <p>
        <a href="{{url('/jobs/'. $job->id)}}">View Your Job Listing</a>
    </p>
</div>
