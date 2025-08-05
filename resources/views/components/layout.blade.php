<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pixel Positions</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
            rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-black text-white pb-10">
        <div class="px-10">
            <nav class="flex justify-between items-center py-6 border-b border-white/10">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo"/>
                    </a>
                </div>

                <div class="px-4 space-x-6 font-bold">
                    <a href="">Jobs</a>
                    <a href="">Careers</a>
                    <a href="">Salaries</a>
                    <a href="">Companies</a>
                </div>

                @auth
                    <div class="px-4 space-x-6 font-bold flex">
                        <a href="/jobs/create">Post a Job</a>

                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')

                            <button>Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="px-4 space-x-6 font-bold">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Login</a>
                    </div>
                @endguest
            </nav>

            <main class="mt-10 mx-auto max-w-[986px]">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
