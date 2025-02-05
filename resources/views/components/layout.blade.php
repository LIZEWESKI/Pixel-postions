<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class=" bg-black text-white font-[Roboto] pb-20" >
    <div class="px-4">
        <header class="flex justify-between items-center border-b border-white/25 py-4">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <nav class=" font-bold space-x-3"> 
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </nav>
            @guest
                <nav class=" font-bold space-x-3"> 
                    <a href="/register">Register</a>
                    <a href="/login">Log in</a>
                </nav>
            @endguest
            @auth
                <div class="flex items-center gap-3">
                    <a href="/jobs/create">Post a Job</a>
                    <form action="/logout" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Log out</button>
                    </form>
                </div>
            @endauth
        </header>
        <main class=" mt-6 max-w-[980px] mx-auto space-y-10">
            {{$slot}}
        </main>
    </div>
</body>
</html>