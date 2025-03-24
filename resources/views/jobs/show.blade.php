<x-layout>
    <x-page-heading>{{$searchWord}}</x-page-heading>

    <div class="mx-100 space-y-0.5">
        <p>Salary: {{ $job->salary }}</p>
        <p>Schedule: {{ $job->schedule }}</p>
        <p>Location: {{ $job->location }}</p>
        <p>Responsable User: {{ $job->employer->user->name }}</p>
        <p>Responsable Email: <a class="text-blue-600 font-bold" href="mailto:{{ $job->employer->user->email }}">{{ $job->employer->user->email }}</a></p>
        <p>Employer: {{ $job->employer->name }}</p>
        <p class="text-blue-600 font-bold"><a href="{{ $job->url }}">Click to know more</a></p>
        <p>Tags:</p>
        <div class="mt-2 space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach
        </div>
    </div>
</x-layout>
