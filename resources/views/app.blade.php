<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="lg:h-full">
<head>
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @@ -15,7 +15,7 @@
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        @inertiaHead
    </head>
</head>
<body class="font-sans antialiased">
<body class="font-sans antialiased bg-gray-100 lg:overflow-hidden lg:h-full">
@inertia
@inertia
</body>
</body>
</html>
</html>
