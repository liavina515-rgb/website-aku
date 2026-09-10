<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    @include('partials.header')
    <div class="container mt-4">
        <main style="padding: 20px; min-height: 400px;">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
