<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Job's Title" name="title" placeholder="Witch Hunter" />
        <x-forms.input label="Salary" name="salary" placeholder="$100,000"/>
        <x-forms.select label="Schedule" name="schedule">
            <option value="Full-Time">Full Time</option>
            <option value="Part-Time">Part Time</option>
        </x-forms.select>
        <x-forms.select label="Location" name="location">
            <option value="OnSite">On Site</option>
            <option value="Remote">Remote</option>
            <option value="Hybrid">Hybrid</option>
        </x-forms.select>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>
        <x-forms.divider/>
        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="stones, witch-craft, cards"/>
        <x-forms.button>Create</x-forms.button>
    </x-forms.form>
</x-layout>