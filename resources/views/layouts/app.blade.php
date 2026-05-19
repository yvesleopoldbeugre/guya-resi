<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Découvrez Guya Resi à Abidjan, Angré Nouveau CHU. Des résidences meublées d\'exception alliant sécurité, confort absolu et modernité pour vos courts et longs séjours.')">
    <meta name="keywords" content="residence meublee abidjan, appartement meuble angre, location court sejour abidjan, guya resi, residence de luxe abidjan, hebergement abidjan">
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="@yield('title', 'Guya Resi - Votre Confort, Notre Engagement')">
    <meta property="og:description" content="@yield('meta_description', 'Découvrez Guya Resi à Abidjan, Angré Nouveau CHU. Des résidences meublées d\'exception alliant sécurité, confort absolu et modernité pour vos courts et longs séjours.')">
    <meta property="og:image" content="{{ asset('images/room1.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="@yield('title', 'Guya Resi - Votre Confort, Notre Engagement')">
    <meta property="twitter:description" content="@yield('meta_description', 'Découvrez Guya Resi à Abidjan, Angré Nouveau CHU. Des résidences meublées d\'exception alliant sécurité, confort absolu et modernité pour vos courts et longs séjours.')">
    <meta property="twitter:image" content="{{ asset('images/room1.jpg') }}">

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
    @yield('structured_data')
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
