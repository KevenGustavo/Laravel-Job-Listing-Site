@props(["job"])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"  />
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            <a href="/jobs/{{ $job->id }}">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" size="small" />
        @endforeach
    </div>
</x-panel>
