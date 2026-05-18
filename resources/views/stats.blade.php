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
            <a href="/" class="text-anthracite border border-anthracite px-6 py-2 uppercase font-bold tracking-widest hover:bg-anthracite hover:text-white transition rounded-sm text-sm">Retour au site</a>
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
