<x-layout>
    <x-slot:heading>
        Single Job Page
    </x-slot:heading>
    <h1>Job For:{{$job['name']}}</h1>
    <ul>


            @foreach ($job['skills'] as $skill)

                <span class="font-bold">
                    {{$skill }} |
                </span>




            @endforeach


    </ul>

</x-layout>
