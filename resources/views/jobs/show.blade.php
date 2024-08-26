<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <h1 class="text-center text-xl font-semibold mt-6">Welcome to your Jobs page</h1>

    <div class="flex">
        <div class="bg-white mx-6 shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-xl font-bold text-large">{{$job->title}}</h2>
            <p class="text-gray-500"> this job pays <span class="text-green-700 font-bold">{{$job->salary}}</span> per
                annum</p>
        </div>


    </div>

    <p class="mt-5 p-5">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>

</x-layout>
