<x-layout>
    <x-slot:heading>
        JobsPage
    </x-slot:heading>
    <h1>Job Page:</h1>
    <div class="space-y-4">

            @foreach ($jobs as $job)


                <a class="block px-4 border py-6 border-gray-300 rounded-lg" href="/jobs/{{$job['id']}}">
                 <div class="font-bold text-blue-500 text-sm">{{$job->employer->name}}</div>
                    <strong>{{ $job['title'] }}:</strong> Salary : {{$job['salary']}}

                <div>

                </div>
            </a>


            @endforeach
        <div>
            {{$jobs->links()}}
        </div>

    </div>

</x-layout>
