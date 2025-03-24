@props(["employer"])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$employer"  />
    </div>

    <div>
        <h3 class="font-bold text-xl mt-6 group-hover:text-blue-600 transition-colors duration-300">
            {{ $employer->name }}
        </h3>
    </div>

</x-panel>
