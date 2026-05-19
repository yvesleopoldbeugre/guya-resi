@extends('layouts.app')

@section('title', 'Statistiques des Visites - Guya Resi')

@section('content')
<div class="min-h-screen bg-soft-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-12">
            <div>
                <h1 class="text-4xl font-serif text-anthracite mb-2">Statistiques</h1>
                <p class="text-gray-500 uppercase tracking-widest text-sm font-bold">Vue d'ensemble des visites</p>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/" class="text-anthracite border border-anthracite px-6 py-2 uppercase font-bold tracking-widest hover:bg-anthracite hover:text-white transition rounded-sm text-sm">Retour au site</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 border border-red-600 px-6 py-2 uppercase font-bold tracking-widest hover:bg-red-600 hover:text-white transition rounded-sm text-sm">Déconnexion</button>
                </form>
            </div>
        </div>

        <!-- Key Metrics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <span class="text-gray-500 font-bold uppercase tracking-wider text-xs mb-4">Vues Aujourd'hui</span>
                <span class="text-4xl font-serif text-gold">{{ $todayViews ?: 0 }}</span>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <span class="text-gray-500 font-bold uppercase tracking-wider text-xs mb-4">Visiteurs Uniques Aujourd'hui</span>
                <span class="text-4xl font-serif text-gold">{{ $todayUnique ?: 0 }}</span>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <span class="text-gray-500 font-bold uppercase tracking-wider text-xs mb-4">Vues Totales</span>
                <span class="text-4xl font-serif text-anthracite">{{ $totalViews ?: 0 }}</span>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
                <span class="text-gray-500 font-bold uppercase tracking-wider text-xs mb-4">Visiteurs Uniques Totaux</span>
                <span class="text-4xl font-serif text-anthracite">{{ $totalUniqueVisitors ?: 0 }}</span>
            </div>
        </div>

        <!-- Section Views & Button Clicks Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Sections Consultées -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-xl font-serif text-anthracite mb-6">Sections les plus visitées</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-bold text-gray-700">Nos Résidences (#residences)</span>
                            <span class="text-gold font-bold">{{ $sectionViews['residences'] ?? 0 }} vues</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-gold h-full rounded-full" style="width: {{ min(100, (($sectionViews['residences'] ?? 0) / max(1, $totalViews)) * 100) }}%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-bold text-gray-700">Services & Équipements (#services)</span>
                            <span class="text-gold font-bold">{{ $sectionViews['services'] ?? 0 }} vues</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-gold h-full rounded-full" style="width: {{ min(100, (($sectionViews['services'] ?? 0) / max(1, $totalViews)) * 100) }}%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="font-bold text-gray-700">Contact & Plan (#contact)</span>
                            <span class="text-gold font-bold">{{ $sectionViews['contact'] ?? 0 }} vues</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-gold h-full rounded-full" style="width: {{ min(100, (($sectionViews['contact'] ?? 0) / max(1, $totalViews)) * 100) }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clics sur les Boutons -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-xl font-serif text-anthracite mb-6">Engagement & Actions (WhatsApp / Maps)</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-soft-white rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3">
                            <span class="text-2xl">📱</span>
                            <div>
                                <h4 class="font-bold text-sm text-anthracite">WhatsApp - En-tête (Hero)</h4>
                                <p class="text-xs text-gray-500">Bouton de réservation principal</p>
                            </div>
                        </div>
                        <span class="bg-gold/10 text-gold font-bold px-3 py-1 rounded-md text-sm">
                            {{ $buttonClicks['hero_whatsapp'] ?? 0 }} clics
                        </span>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-soft-white rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3">
                            <span class="text-2xl">💬</span>
                            <div>
                                <h4 class="font-bold text-sm text-anthracite">WhatsApp - Menu (Navbar)</h4>
                                <p class="text-xs text-gray-500">Bouton de réservation du haut</p>
                            </div>
                        </div>
                        <span class="bg-gold/10 text-gold font-bold px-3 py-1 rounded-md text-sm">
                            {{ $buttonClicks['navbar_whatsapp'] ?? 0 }} clics
                        </span>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-soft-white rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3">
                            <span class="text-2xl">🖼️</span>
                            <div>
                                <h4 class="font-bold text-sm text-anthracite">WhatsApp - Galerie</h4>
                                <p class="text-xs text-gray-500">Demande de photos supplémentaires</p>
                            </div>
                        </div>
                        <span class="bg-gold/10 text-gold font-bold px-3 py-1 rounded-md text-sm">
                            {{ $buttonClicks['gallery_whatsapp'] ?? 0 }} clics
                        </span>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-soft-white rounded-lg border border-gray-100">
                        <div class="flex items-center space-x-3">
                            <span class="text-2xl">🗺️</span>
                            <div>
                                <h4 class="font-bold text-sm text-anthracite">Google Maps - Itinéraire</h4>
                                <p class="text-xs text-gray-500">Clic pour localiser la résidence</p>
                            </div>
                        </div>
                        <span class="bg-gold/10 text-gold font-bold px-3 py-1 rounded-md text-sm">
                            {{ $buttonClicks['contact_maps'] ?? 0 }} clics
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7 Days Table -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-xl font-serif text-anthracite">Évolution sur les 7 derniers jours</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 uppercase tracking-widest text-xs">
                            <th class="py-4 px-6 font-bold">Date</th>
                            <th class="py-4 px-6 font-bold">Vues</th>
                            <th class="py-4 px-6 font-bold">Visiteurs uniques</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm">
                        @foreach(array_reverse($last7Days->toArray()) as $day)
                        <tr class="border-b border-gray-50 hover:bg-gray-50/50 transition">
                            <td class="py-4 px-6 font-medium text-anthracite">{{ $day['date'] }}</td>
                            <td class="py-4 px-6">
                                <span class="bg-gold/10 text-gold px-3 py-1 rounded-full font-bold">
                                    {{ $day['visits'] }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-anthracite/10 text-anthracite px-3 py-1 rounded-full font-bold">
                                    {{ $day['unique'] }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
