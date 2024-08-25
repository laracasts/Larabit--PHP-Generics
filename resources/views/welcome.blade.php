<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Generics | Laracasts</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased bg-slate-900 text-slate-400">
        <div class="h-96 bg-slate-800 my-5 mx-20 p-4 rounded-md  shadow-xl">
            <div class="px-6 py-8 ring-1 ring-slate-900/5">
                <h3 class="text-white text-2xl mt-5 font-medium tracking-tight">
                    PHP Generics
                </h3>
                <p class="mt-2 text-lg">
                    {{ $content ?? '' }}
                </p>
            </div>
        </div>
    </body>
</html>
