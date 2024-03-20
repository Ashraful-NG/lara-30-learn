<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>


    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-700 hover:underline">
                <strong>{{ $job['title'] }}: </strong>pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</x-layout>
