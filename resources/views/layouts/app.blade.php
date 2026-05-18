<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Guya Resi - Votre Confort, Notre Engagement')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for quick preview) -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            /* Colors */
            --color-gold-light: #F3E5AB;
            --color-gold: #D4AF37;
            --color-gold-dark: #996515;
            --color-anthracite: #1A1A1A;
            --color-soft-white: #F9F9F9;
            
            /* Typography */
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Inter', ui-sans-serif, system-ui, sans-serif;
        }
    </style>
</head>
<body class="font-sans antialiased bg-soft-white text-anthracite">
    <div class="min-h-screen">
        @include('partials.navbar')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>
</html>
