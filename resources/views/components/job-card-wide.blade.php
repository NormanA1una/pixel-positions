@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-[#C2C2C2]">
            {{ $job->employer->name }}
        </a>

        <h3 class="text-xl font-bold mt-3 group-hover:text-blue-800 transition-colors duration-300">
            <a href="/jobs/{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm text-[#C2C2C2] mt-auto">
            {{ $job->location }} - From ${{ $job->salary }}
        </p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
        @endforeach
    </div>

</x-panel>
