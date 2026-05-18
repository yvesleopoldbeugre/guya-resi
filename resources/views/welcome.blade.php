@extends('layouts.app')

@section('title', 'Guya Resi - Votre Confort, Notre Engagement')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden bg-anthracite">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/room1.jpg') }}" alt="Guya Resi Interior" class="w-full h-full object-cover scale-105 animate-slow-zoom">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
            <div class="mb-6 inline-block">
                <span class="block w-12 h-0.5 bg-gold mx-auto mb-4 animate-slide-down"></span>
                <p class="text-gold uppercase tracking-[0.3em] text-xs md:text-sm font-bold animate-fade-in">La 1ère Résidence du Groupe</p>
            </div>
            
            <h1 class="text-5xl md:text-8xl font-serif text-white mb-8 leading-tight animate-fade-in-up">
                C'est <span class="italic text-gold">Ouvert !</span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-200 mb-12 max-w-2xl mx-auto font-light leading-relaxed animate-fade-in-up delay-200">
                Un cadre moderne, sûr et conçu pour votre bien-être. <br class="hidden md:block">
                Découvrez une nouvelle expérience résidentielle à Abidjan.
            </p>
            
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 animate-fade-in-up delay-300">
                <a href="tel:0799943674" class="w-full md:w-auto bg-gold text-anthracite px-10 py-5 rounded-sm font-bold uppercase tracking-widest hover:bg-gold-dark transition-all duration-300 shadow-xl">
                    Réserver Maintenant
                </a>
                <a href="#services" class="w-full md:w-auto border border-white/30 text-white px-10 py-5 rounded-sm font-bold uppercase tracking-widest hover:bg-white hover:text-anthracite transition-all duration-300 backdrop-blur-sm">
                    Découvrir plus
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 animate-bounce">
            <a href="#services" class="text-white/50 hover:text-gold transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Features Section Placeholder -->
    <section id="services" class="py-24 bg-white px-8 md:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-serif text-anthracite mb-4">Confort & Modernité</h2>
                <p class="text-gray-500 uppercase tracking-widest text-sm font-bold">Nos Engagements</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Sécurisé -->
                <div class="group p-8 border border-gray-100 hover:border-gold transition-all duration-500 bg-soft-white">
                    <div class="text-4xl mb-6 grayscale group-hover:grayscale-0 transition">🛡️</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-wider">Sécurisé</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Votre sécurité est notre priorité absolue. Système de surveillance et accès contrôlé 24h/24.
                    </p>
                </div>

                <!-- Equipements -->
                <div class="group p-8 border border-gray-100 hover:border-gold transition-all duration-500 bg-soft-white shadow-sm hover:shadow-xl">
                    <div class="text-4xl mb-6 grayscale group-hover:grayscale-0 transition">✨</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-wider">Équipements Inclus</h3>
                    <ul class="text-gray-600 leading-relaxed space-y-3 font-medium">
                        <li class="flex items-center"><span class="text-gold mr-3">❄️</span> Climatisation</li>
                        <li class="flex items-center"><span class="text-gold mr-3">📶</span> Wi-Fi Haut Débit</li>
                        <li class="flex items-center"><span class="text-gold mr-3">🚿</span> Eau Chaude</li>
                        <li class="flex items-center"><span class="text-gold mr-3">🛏️</span> Literie Orthopédique</li>
                    </ul>
                </div>

                <!-- Emplacement -->
                <div class="group p-8 border border-gray-100 hover:border-gold transition-all duration-500 bg-soft-white">
                    <div class="text-4xl mb-6 grayscale group-hover:grayscale-0 transition">📍</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-wider">Emplacement Stratégique</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Situé à Angre Nouveau CHU, à proximité des commodités et facilement accessible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section (Nos Résidences) -->
    <section id="residences" class="py-24 bg-soft-white px-8 md:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-serif text-anthracite mb-4">La 1ère Résidence</h2>
                <p class="text-gray-500 uppercase tracking-widest text-sm font-bold">Un aperçu de votre futur séjour</p>
            </div>

            <!-- Masonry Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Column (Large Feature Image) -->
                <div class="group overflow-hidden relative h-[400px] md:h-[600px] rounded-xl shadow-lg">
                    <img src="{{ asset('images/room1.jpg') }}" alt="Chambre Principale" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-8">
                        <h4 class="text-white text-2xl font-serif tracking-wide">Vue Complète</h4>
                    </div>
                </div>
                
                <!-- Right Column (Two Stacked Images) -->
                <div class="grid grid-rows-2 gap-6 md:h-[600px]">
                    <div class="group overflow-hidden relative rounded-xl shadow-lg h-[250px] md:h-auto">
                        <img src="{{ asset('images/room2.jpg') }}" alt="Espace Confort" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                            <h4 class="text-white text-xl font-serif tracking-wide">Espace Couchage</h4>
                        </div>
                    </div>

                    <div class="group overflow-hidden relative rounded-xl shadow-lg h-[250px] md:h-auto">
                        <img src="{{ asset('images/room3.jpg') }}" alt="Aperçu Chambre" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                            <h4 class="text-white text-xl font-serif tracking-wide">Entrée Lumineuse</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="https://wa.me/2250799943674" target="_blank" class="inline-block border-2 border-anthracite text-anthracite px-10 py-4 uppercase font-bold tracking-widest hover:bg-anthracite hover:text-white transition duration-300">
                    Plus de photos sur WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Contact & Map Section -->
    <section id="contact" class="py-24 bg-anthracite text-white px-8 md:px-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl md:text-5xl font-serif mb-8 text-gold">Nous Situer</h2>
                <p class="text-gray-300 mb-10 text-lg font-light leading-relaxed">
                    Située au cœur d'Abidjan, Guya Resi vous offre un cadre discret, sécurisé et très accessible.
                </p>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-gold/10 p-3 rounded-full text-gold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold uppercase tracking-widest mb-1">Adresse</h4>
                            <p class="text-gray-400">Angre Nouveau CHU base CIE<br>Sur Yango : Carrefour Hadja</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-gold/10 p-3 rounded-full text-gold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold uppercase tracking-widest mb-1">Téléphone & WhatsApp</h4>
                            <p class="text-gray-400">07 99 94 36 74</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fake Map / Visual Placeholder -->
            <div class="w-full h-[400px] bg-gray-800 rounded-xl overflow-hidden relative group">
                <!-- If you have a Google Maps embed code, replace the image below with the iframe -->
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&q=80&w=1000" alt="Map View" class="w-full h-full object-cover opacity-60 group-hover:opacity-40 transition duration-500">
                <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center">
                    <span class="text-4xl mb-4">📍</span>
                    <h3 class="text-xl font-bold font-serif mb-2 text-white">Carrefour Hadja</h3>
                    <a href="https://maps.google.com/?q=Angre+Nouveau+CHU" target="_blank" class="mt-4 bg-gold text-anthracite px-6 py-2 rounded-sm font-bold uppercase tracking-widest text-sm hover:bg-white transition">Ouvrir Google Maps</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes slow-zoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        .animate-slow-zoom {
            animation: slow-zoom 20s ease-in-out infinite alternate;
        }
        
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }
        
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.4s; }
    </style>
@endsection
