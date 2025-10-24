@extends('layouts.app')

@section('title', 'About — Yousra Akajou')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
    <!-- Floating Decorative Elements -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-purple-300 to-pink-300 rounded-full opacity-40 blur-2xl animate-float"></div>
    <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-300 to-cyan-300 rounded-full opacity-40 blur-2xl animate-float-slow"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-gradient-to-r from-purple-400 to-blue-400 rounded-full opacity-30 blur-xl animate-float" style="animation-delay: 1s;"></div>

    <div class="max-w-7xl mx-auto px-6 py-20 z-10">
        <div class="text-center mb-16 animate-slide-in">
            <h1 class="text-6xl font-black mb-6">
                <span class="gradient-text">À Propos de Moi</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Découvrez ma passion pour le développement web
            </p>
        </div>

        <!-- Profile Card -->
        <div class="glass-card rounded-3xl p-12 shadow-2xl mb-16 animate-fade-in">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="relative glass-card rounded-3xl p-6 transform hover:scale-105 transition duration-500">
                        <img src="{{ asset('images/2.jpg') }}" alt="{{ $developer['prenom'] }} {{ $developer['nom'] }}" class="w-full h-auto rounded-2xl shadow-2xl object-cover" style="max-height: 450px;">
                        
                        <div class="absolute -bottom-6 -right-6 bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-xl animate-float">
                            <div class="text-center">
                                <p class="text-3xl font-bold gradient-text mb-1">2+</p>
                                <p class="text-sm text-gray-600">Années d'Expérience</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="inline-block">
                        <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                            🎓 Étudiante en Développement Digital
                        </span>
                    </div>
                    <h2 class="text-4xl font-bold text-purple-700">{{ $developer['prenom'] }} {{ $developer['nom'] }}</h2>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Étudiante passionnée à l'ISMONTIC de Tanger, je suis spécialisée dans le développement web full-stack. 
                        Mon objectif est de créer des solutions numériques innovantes qui allient esthétique et performance.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Je crois fermement que le code est un art et que chaque projet est une opportunité d'apprendre et de grandir. 
                        J'aime relever des défis techniques et transformer des idées créatives en réalité digitale.
                    </p>
                    
                    <div class="flex gap-4 pt-4">
                        <a href="https://www.linkedin.com/in/yousra-akajou-50207a334?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-xl flex items-center justify-center text-white hover:scale-110 transition shadow-lg">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/Yousra-akg/" class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center text-white hover:scale-110 transition shadow-lg">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.instagram.com/youssy_akg?igsh=ZDVhNmQ5Z3V0bjM%3D&utm_source=qr" class="w-12 h-12 bg-gradient-to-br from-pink-500 to-red-500 rounded-xl flex items-center justify-center text-white hover:scale-110 transition shadow-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-16 animate-fade-in" style="animation-delay: 0.8s;">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Travaillons Ensemble !</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Vous avez un projet en tête ? N'hésitez pas à me contacter pour en discuter !
            </p>
            <div class="flex gap-4 justify-center">
                <a href="{{ route('home') }}#contact" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    Me Contacter
                </a>
                <a href="{{ route('projects.index') }}" class="bg-white/40 backdrop-blur-md text-purple-700 px-8 py-4 rounded-full font-bold border-2 border-white/50 hover:bg-white/60 transition">
                    Voir Mes Projets
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
