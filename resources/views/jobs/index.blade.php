<x-layout>
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
        <x-forms.form action="/search" class="mt-6">
        <x-forms.input :label="false" placeholder="Web Developer..." name="q"/>
        </x-forms.form>
    </section>
    <section  class="pt-10">
        <x-heading >Top Jobs</x-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach ($featured_jobs as $job)
                <x-card :$job/>
            @endforeach
        </div>
    </section>
    <section>
        <x-heading >Tags</x-heading>
        <div>
            @foreach ($tags as $tag)
                <x-tag type="large" :tag="$tag"/>
            @endforeach
        </div>
    </section>
    <section>
        <x-heading >Find Jobs</x-heading>
        <div class="space-y-3">
            @foreach ($jobs as $job)
                <x-card-wide :$job/>
            @endforeach
        </div>
    </section>
</x-layout>