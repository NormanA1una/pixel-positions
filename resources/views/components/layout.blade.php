<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            {{-- Logo --}}
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" />
                </a>
            </div>

            {{-- Links --}}
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salarys</a>
                <a href="#">Companies</a>
            </div>

            {{-- Post a job --}}
            @auth
                <div class="flex items-center space-x-4">
                    <a href="/jobs/create">Post a job</a>

                    <form id="logout-form" action="/logout" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @endauth

            {{-- Login --}}
            @guest
                <div class="flex items-center space-x-4">
                    <a href="/register">Sign up </a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
