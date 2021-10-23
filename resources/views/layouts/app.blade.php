<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class=" px-6 py-4 ">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/000000000000005b48aec07710c08d50?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full" />
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Add Idea Form Goes Here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid incidunt obcaecati
            voluptatibus illum beatae. Odio repellendus unde nulla, accusamus consequuntur in? Odio sit totam minima,
            similique obcaecati aliquam accusamus? Amet, sequi. Vitae harum ratione est maiores dicta modi ex ea animi
            nisi, magnam sed consectetur sunt delectus voluptatibus nobis laudantium eligendi sit quisquam corporis
            illum provident perferendis natus. Nam, consequuntur. Quis, unde alias ipsa dolor deserunt obcaecati sunt
            numquam dolore excepturi est, nam debitis, nostrum consequatur assumenda quo. Voluptatibus, omnis porro!
            Optio deleniti ab labore temporibus ipsam eos saepe, vitae, soluta fuga amet necessitatibus possimus,
            adipisci et corrupti maxime at.
        </div>

        <div class="w-175">
            <nav class="flex items-center text-xs justify-between">
                <ul class="flex font-semibold uppercase space-x-10 border-b-4 pb-3">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                            (6)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                            Progress (1)</a></li>
                </ul>
                <ul class="flex font-semibold uppercase space-x-10 border-b-4 pb-3">
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                            (10)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                            (55)</a></li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>

    </main>
</body>

</html>
