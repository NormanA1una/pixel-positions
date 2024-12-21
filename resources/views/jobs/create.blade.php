<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <form action="/jobs" method="post" class="space-y-4">
        @csrf

        <x-forms.input name="title" label="Title" placeholder="CEO" />
        <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD" />
        <x-forms.input name="location" label="Location" placeholder="Remote" />

        <x-forms.select name="schedule" label="Schedule">
            <option value="full-time">Full-Time</option>
            <option value="part-time">Part-Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://example.com" />
        <x-forms.checkbox name="featured" label="Featured (Costs Extra)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="Laravel, Vue, Tailwind" />

        <x-forms.button class="mt-4">Create</x-forms.button>
    </form>
</x-layout>
