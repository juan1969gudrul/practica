<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Club Deportivo Campeones de Cuarte' }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="min-h-screen flex flex-col">
    <x-layouts.header />
    <x-layouts.nav />
    
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-layouts.footer />
</body>
</html>