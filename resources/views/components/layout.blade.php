@props([
    'title' => null,
    'background' => 'ruvim-noga-o0R4iqk1eRQ-unsplash.jpg',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ? $title . ' | ' : null }}AWcodes Plugin Screenshot Generator</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=fira-sans:400,700" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-primary-800 text-white grid place-content-center">
        <div class="w-[2560px] h-[1440px] relative">
            <div class="relative z-0" style="filter: blur(18px);">
                <img src="{{asset($background)}}" alt="" width="2560" height="1440">
            </div>
            {{ $slot }}
            <div class="absolute bottom-[70px] right-[70px] w-auto h-[70px] text-primary-300">
                <x-logo />
            </div>
            <div class="absolute bottom-[30px] right-[70px] text-white text-lg">
                Photo by Ruvim Noga on Unsplash
            </div>
        </div>
    </body>
</html>
