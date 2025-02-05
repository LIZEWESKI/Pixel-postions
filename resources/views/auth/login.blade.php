<x-layout>
    <x-page-heading>Log in</x-page-heading>
    <x-forms.form action="/login" method="POST" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" placeholder="Email" type="email"/>
        <x-forms.input label="Password" name="password" placeholder="Password" type="password"/>
        <x-forms.divider/>
        <x-forms.button>Log in</x-forms.button>
    </x-forms.form>
</x-layout>