<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>{{ $title ?? 'Laravel' }}</title>

    <meta name='viewport' content='width=device-width, initial-scale=1' />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="relative overflow-x-hidden text-sm antialiased font-normal font-nunito dark">
    <div class="min-h-screen text-black main-container dark:text-white-dark">
        <x-admin.sidebar />
        <div class="flex flex-col min-h-screen main-content">
            <div class="p-6">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>