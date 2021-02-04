<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon"
          type="image/jpeg"
          href="http://localhost:9600/property-files/favicon.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=homestead%2F20210204%2F%2Fs3%2Faws4_request&X-Amz-Date=20210204T031226Z&X-Amz-Expires=432000&X-Amz-SignedHeaders=host&X-Amz-Signature=9a4b725cc543b825067c91630b6085cdaa22564a73b3dbdeacef5b7f4dae59f4">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
