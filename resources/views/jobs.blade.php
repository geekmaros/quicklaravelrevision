<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>


    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-center text-xl font-semibold mt-6">Look through our available Jobs</h1>

        <div class="w-full h-full mt-6">
            <ul class="h-full w-full flex flex-wrap">
                @foreach($jobs as $job)
                    {{--        Create a card that display list of jobs with title and salary --}}

                    <li class="bg-white shadow-md w-2/12 mx-4  rounded-lg p-6 mt-6">
                        <a href="/jobs/{{$job['id']}}">
                            <h2 class="text-xl font-semibold">{{$job['title']}}</h2>
                            <p class="text-gray-500">{{$job['salary']}}</p>
                        </a>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
