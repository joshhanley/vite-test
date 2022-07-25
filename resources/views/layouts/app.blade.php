<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <livewire:styles />
</head>
<body>
    {{ $slot }}

    <livewire:scripts />
    {{-- <script src="{{ mix('js/mix.js') }}"></script> --}}
    @vite(['resources/js/app.js'])
</body>
</html>