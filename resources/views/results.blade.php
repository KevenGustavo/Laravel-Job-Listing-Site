<x-layout>
    <x-page-heading>Results for {{$searchWord}}</x-page-heading>

    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job"/>
        @endforeach
    </div>
</x-layout>
