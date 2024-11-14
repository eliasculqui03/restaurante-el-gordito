<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi page web</title>

    <link rel="icon" href="{{ asset('assets/cuervo.png') }}" type="image/png">

    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>
</head>

<body class="bg-gray-50 dark:bg-neutral-900">

    @include('layouts._partials.header')
    @include('layouts._partials.sidebar')


    <div class="w-full lg:ps-64">
        <div class="p-4 space-y-4 sm:p-6 sm:space-y-6">
            @yield('content')

        </div>
    </div>



</body>

</html>
