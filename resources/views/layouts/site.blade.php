<!DOCTYPE html>
<html lang="fa">

<head>
    @include('livewire.site.layouts.head')
    <title>@yield('title')|دیجی استور</title>
</head>

<body>
    <livewire:site.layouts.header>
    {{ $slot }}
    <livewire:site.layouts.footer>
    @include('livewire.site.layouts.scripts')
</body>
</html>