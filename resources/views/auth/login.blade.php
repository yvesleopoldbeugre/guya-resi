@extends('layouts.app')

@section('title', 'Connexion - Guya Resi')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-soft-white py-12 px-6">
    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-xl border border-gray-100 relative overflow-hidden">
        <!-- Accent line -->
        <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-gold via-gold-dark to-gold"></div>

        <div class="text-center mb-8">
            <h2 class="text-3xl font-serif text-anthracite mb-2">Espace Admin</h2>
            <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Connexion aux statistiques</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 text-sm font-medium">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-xs uppercase font-bold tracking-wider text-gray-500 mb-2">Adresse E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-gold transition">
            </div>

            <div>
                <label for="password" class="block text-xs uppercase font-bold tracking-wider text-gray-500 mb-2">Mot de passe</label>
                <input type="password" name="password" id="password" required class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-gold transition">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center text-xs font-bold tracking-wider text-gray-500 uppercase cursor-pointer">
                    <input type="checkbox" name="remember" class="mr-2 rounded text-gold focus:ring-gold border-gray-300">
                    Se souvenir de moi
                </label>
            </div>

            <button type="submit" class="w-full bg-gold text-anthracite py-3 rounded-lg uppercase font-bold tracking-widest text-sm hover:bg-gold-dark hover:text-white transition shadow-lg">
                Se Connecter
            </button>
        </form>

        <div class="text-center mt-6">
            <a href="/" class="text-xs font-bold uppercase tracking-wider text-gold hover:underline">Retourner à l'accueil</a>
        </div>
    </div>
</div>
@endsection
