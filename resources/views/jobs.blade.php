<x-layout>
    <x-slot:heading>
        JobsPage
    </x-slot:heading>
    <h1>Job Page:</h1>
    <ul>

            @foreach ($jobs as $job)

            <li>
                <a class="text-blue" href="/jobs/{{$job['id']}}">
                <strong>{{ $job['name'] }}:</strong> Skills: @foreach ($job['skills'] as $skill) {{ $skill }}. @endforeach
            </a>
            </li>

            @endforeach


    </ul>

</x-layout>
