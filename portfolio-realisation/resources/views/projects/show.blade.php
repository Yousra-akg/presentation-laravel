@extends('layouts.app')

@section('title', $project['titre'] . ' — Yousra Akajou')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-12 overflow-hidden">
    <!-- Floating Decorative Elements -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-purple-300 to-pink-300 rounded-full opacity-40 blur-2xl animate-float"></div>
    <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-300 to-cyan-300 rounded-full opacity-40 blur-2xl animate-float-slow"></div>

    <div class="max-w-7xl mx-auto px-6 z-10 relative">
        <!-- Back Button -->
        <div class="mb-8 animate-slide-in">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-semibold transition">
                <i class="fas fa-arrow-left"></i>
                Retour aux projets
            </a>
        </div>

        <!-- Project Header -->
        <div class="glass-card rounded-3xl p-12 shadow-2xl mb-12 animate-fade-in">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block mb-4">
                        <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                            🚀 Projet
                        </span>
                    </div>
                    <h1 class="text-5xl font-black mb-6 gradient-text">{{ $project['titre'] }}</h1>
                    <p class="text-xl text-gray-600 leading-relaxed mb-6">
                        {{ $project['description'] }}
                    </p>
                    
                    <!-- Project Meta -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white/50 backdrop-blur-md rounded-2xl p-4">
                            <p class="text-sm text-gray-500 mb-1">Date Début</p>
                            <p class="font-bold text-gray-800">{{ $project['dateDebut'] }}</p>
                        </div>
                        <div class="bg-white/50 backdrop-blur-md rounded-2xl p-4">
                            <p class="text-sm text-gray-500 mb-1">Date Fin</p>
                            <p class="font-bold text-gray-800">{{ $project['dateFin'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Main Project Image -->
                <div class="relative">
                    <div class="glass-card rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-500">
                        <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['titre'] }}" class="w-full h-auto">
                    </div>
                    <!-- Floating Stats -->
                    <div class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-xl animate-float">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-star text-yellow-500 text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technologies Used -->
        @if(count($project['technologies']) > 0)
        <div class="mb-12 animate-slide-in" style="animation-delay: 0.2s;">
            <h2 class="text-4xl font-black mb-8 gradient-text text-center">Technologies Utilisées</h2>
            <div class="glass-card rounded-3xl p-10 shadow-2xl">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    @foreach($project['technologies'] as $tech)
                    <div class="tech-badge bg-white/50 backdrop-blur-md rounded-2xl p-6 text-center hover:shadow-xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                            <i class="fas fa-code text-white text-3xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800">{{ $tech }}</h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- CTA Section -->
        <div class="text-center mt-16 glass-card rounded-3xl p-12 shadow-2xl animate-fade-in" style="animation-delay: 0.6s;">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Intéressé par un projet similaire ?</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Contactez-moi pour discuter de votre projet et voir comment nous pouvons créer quelque chose d'extraordinaire ensemble !
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ route('home') }}#contact" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    Me Contacter
                </a>
                <a href="{{ route('projects.index') }}" class="bg-white/40 backdrop-blur-md text-purple-700 px-8 py-4 rounded-full font-bold border-2 border-white/50 hover:bg-white/60 transition">
                    Voir Plus de Projets
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
