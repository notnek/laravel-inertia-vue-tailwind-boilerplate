<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Site</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    @inertia
    @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
