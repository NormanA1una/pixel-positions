<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Let's find your next job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." name="search" id="search"
                    class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full max-w-xl mx-auto">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="space-x-1 mt-6">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="space-y-6 mt-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>