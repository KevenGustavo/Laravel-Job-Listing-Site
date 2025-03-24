<x-layout>
    <x-page-heading>Featured Companies</x-page-heading>

    <div class="space-y-6">
        @foreach ($employers as $employer)
            <x-employer-card :employer="$employer"/>
        @endforeach
    </div>
</x-layout>
