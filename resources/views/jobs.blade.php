<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>

    <ul>
      
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 underline hover:text-blue-700 hover:underline">
        

               <li><strong>{{ $job['title'] }} </strong>: {{ $job['salary'] }}</li>
        </a>
        @endforeach
    </ul>
</x-layout>
