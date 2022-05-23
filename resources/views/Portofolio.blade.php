<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Portofolio</title>
        <link rel="icon" href=""> 

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">

        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        {{-- Fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="portofolio">
            @include('container/navbar')
            @include('container/home')
            @include('container/about')
            @include('container/project')
            @include('container/footer')
        </div>

        {{-- JS Link --}}
        <script src="{{ asset('js/script.js') }}"></script>

        {{-- AOS JS --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>