<x-layout>
    <x-slot:heading>
        JobsPage
    </x-slot:heading>
    <h1>Job Page:</h1>
@foreach ($jobs as $job)
    <li><strong>{{$job['name']}} : {{$job['description']}}</strong></li>
@endforeach


</x-layout>
