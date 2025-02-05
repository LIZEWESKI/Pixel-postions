<x-layout>
    <x-page-heading>Search</x-page-heading>
    <section  class="pt-10">
        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach ($jobs as $job)
                <x-card :$job/>
            @endforeach
        </div>
    </section>
</x-layout>