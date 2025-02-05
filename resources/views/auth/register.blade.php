<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form action="/register" method="POST" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" placeholder="Name" />
        <x-forms.input label="Email" name="email" placeholder="Email" type="email"/>
        <x-forms.input label="Password" name="password" placeholder="Password" type="password"/>
        <x-forms.input label="Confirmed Password" name="password_confirmation" placeholder="Confirmed Password" type="password"/>
        <x-forms.divider/>
        <x-forms.input label="Employer's Name" name="employer_name" placeholder="Employer's Name"/>
        <x-forms.input label="Employer's Logo" name="employer_logo" type="file"/>
        <x-forms.button>Register</x-forms.button>
    </x-forms.form>
</x-layout>