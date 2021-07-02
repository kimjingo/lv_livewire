<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Livewire') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <div class="container pt-4">
        <input type="text" placeholder="Search...">
        <ul>
            @include('contacts-partial')
        </ul>
    </div>
    <script>
        document.querySelector('input').addEventListener('input', function(e){
            fetch('/contacts?search='+e.target.value)
                .then(response => response.text())
                .then(html => {
                    document.querySelector('ul').innerHTML = html
                })

        });
    </script>
</body>
</html>