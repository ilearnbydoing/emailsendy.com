@include('wave::premium-theme-message')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('theme::partials.head', ['seo' => ($seo ?? null) ])
</head>
<body class="flex flex-col min-h-screen overflow-x-hidden bg-gray-50 dark:bg-gray-950 min-h-sreen @if($bodyClass ?? false){{ $bodyClass }}@endif">

    <x-app.header />

    <main>
        {{ $slot }}
    </main>

    @livewire('notifications')
    @filamentScripts
    @livewireScripts
    
    {{ $javascript ?? '' }}

    <!-- Pixel Code - https://notify.afterlaunch.app/ -->
<script defer src="https://notify.afterlaunch.app/pixel/iok3gZdF7u7zYYrO"></script>
<!-- END Pixel Code -->
</body>
</html>