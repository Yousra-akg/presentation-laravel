@extends('layouts.app')

@section('title', 'Portfolio — Yousra Akajou')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20 mt-40">
    <!-- Floating Decorative Elements -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-purple-300 to-pink-300 rounded-full opacity-40 blur-2xl animate-float"></div>
    <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-300 to-cyan-300 rounded-full opacity-40 blur-2xl animate-float-slow"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-gradient-to-r from-purple-400 to-blue-400 rounded-full opacity-30 blur-xl animate-float" style="animation-delay: 1s;"></div>

    <!-- Floating Icons -->
    <div class="floating-icon top-32 left-1/4 text-purple-400 text-4xl opacity-20" style="animation-delay: 0.5s;">
        <i class="fab fa-react"></i>
    </div>
    <div class="floating-icon bottom-40 left-1/3 text-blue-400 text-3xl opacity-20" style="animation-delay: 1.5s;">
        <i class="fab fa-js"></i>
    </div>
    <div class="floating-icon top-1/3 right-1/4 text-pink-400 text-3xl opacity-20" style="animation-delay: 2s;">
        <i class="fab fa-html5"></i>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center z-10">
        <!-- Left Content -->
        <div class="text-left space-y-6 animate-slide-in">
            <div class="inline-block">
                <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                    👋 {{ $developer['role'] }}
                </span>
            </div>
            <h1 class="text-6xl font-black leading-tight">
                <span class="gradient-text">{{ $developer['prenom'] }} {{ $developer['nom'] }}</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-lg leading-relaxed">
                {{ $developer['bio'] }}
            </p>
            <div class="flex gap-4">
                <a href="{{ route('projects.index') }}" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    Démarrer
                </a>
                <a href="#contact" class="bg-white/40 backdrop-blur-md text-purple-700 px-8 py-4 rounded-full font-bold border-2 border-white/50 hover:bg-white/60 transition">
                    Contactez Moi
                </a>
            </div>

            <!-- Social Icons -->
            <div class="flex gap-4 pt-4">
                <a href="https://www.linkedin.com/in/yousra-akajou-50207a334?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="social-icon w-12 h-12 bg-white/40 backdrop-blur-md rounded-full flex items-center justify-center text-purple-600 hover:bg-purple-500 hover:text-white">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/Yousra-akg/" class="social-icon w-12 h-12 bg-white/40 backdrop-blur-md rounded-full flex items-center justify-center text-blue-600 hover:bg-blue-500 hover:text-white">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.instagram.com/youssy_akg?igsh=ZDVhNmQ5Z3V0bjM%3D&utm_source=qr" class="social-icon w-12 h-12 bg-white/40 backdrop-blur-md rounded-full flex items-center justify-center text-pink-600 hover:bg-pink-500 hover:text-white">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- Right Content - Image with decorations -->
        <div class="relative animate-slide-in" style="animation-delay: 0.2s;">
            <div class="relative">
                <!-- Main circular background -->
                <div class="absolute inset-0 bg-gradient-to-br from-purple-300/50 via-blue-300/50 to-pink-300/50 rounded-full blur-3xl"></div>
                
                <!-- Glass card with image -->
                <div class="relative glass-card rounded-3xl p-8 transform hover:scale-105 transition duration-500">
                    <img src="{{ asset('images/' . $developer['photoProfile']) }}" alt="{{ $developer['prenom'] }} {{ $developer['nom'] }}" class="w-full h-auto rounded-2xl shadow-2xl object-cover" style="max-height: 500px;">
                    
                    <!-- Floating mini cards -->
                    <div class="absolute -top-6 -left-6 bg-white/90 backdrop-blur-md rounded-2xl p-4 shadow-xl animate-float">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-code text-3xl text-purple-500"></i>
                            <div>
                                <p class="text-sm font-bold">Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -right-6 bg-white/90 backdrop-blur-md rounded-2xl p-4 shadow-xl animate-float" style="animation-delay: 1s;">
                        <div class="text-center">
                            <div class="flex items-center justify-center gap-2 mb-2">
                                <i class="fas fa-users text-purple-500"></i>
                                <i class="fas fa-user-circle text-blue-500"></i>
                                <i class="fas fa-user text-pink-500"></i>
                                <i class="fas fa-user-tie text-cyan-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="absolute top-1/2 -left-8 bg-white/90 backdrop-blur-md rounded-full p-3 shadow-xl animate-float" style="animation-delay: 0.5s;">
                        <i class="fab fa-react text-2xl text-cyan-500"></i>
                    </div>

                    <div class="absolute top-1/4 -right-8 bg-white/90 backdrop-blur-md rounded-full p-3 shadow-xl animate-float" style="animation-delay: 1.5s;">
                        <i class="fab fa-laravel text-2xl text-red-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 relative">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-black mb-16 gradient-text">À propos de moi</h2>
        <div class="glass-card rounded-3xl p-12 shadow-2xl">
            <h3 class="text-3xl font-bold text-purple-700 mb-6">Passionnée par le Code</h3>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                Étudiante à l'ISMONTIC de Tanger en développement digital, je suis motivée par la création de solutions web modernes.
                J'aime combiner créativité, logique et technologie pour construire des sites et applications utiles, clairs et bien structurés.
            </p>
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                Mon objectif est de créer des expériences numériques qui non seulement résolvent des problèmes,
                mais qui inspirent et engagent les utilisateurs.
            </p>
            <a href="#contact" class="inline-block bg-gradient-to-r from-purple-500 to-blue-500 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                Let's Work Together
            </a>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-5xl font-black text-center mb-16 gradient-text">Mes Projets</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <div class="glass-card rounded-3xl overflow-hidden hover:scale-105 transition duration-500 shadow-2xl group">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['titre'] }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-3 text-purple-700">{{ $project['titre'] }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($project['description'], 100) }}</p>
                    <a href="{{ route('projects.show', $project['id']) }}" class="inline-block bg-gradient-to-r from-purple-500 to-blue-500 text-white px-6 py-3 rounded-full font-bold hover:shadow-lg transition">
                        Voir Détails →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-5xl font-black text-center mb-16 gradient-text">Contactez-moi</h2>
        <div class="glass-card rounded-3xl p-12 shadow-2xl">
            <div class="space-y-8">
                <h3 class="text-2xl font-bold text-purple-700 mb-6">Informations de contact</h3>

                <!-- Email -->
                <div class="flex items-start gap-6 bg-white/50 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Email</h4>
                        <p class="text-gray-600">{{ $developer['email'] }}</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-6 bg-white/50 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Téléphone</h4>
                        <p class="text-gray-600">{{ $developer['numeroTelephone'] }}</p>
                    </div>
                </div>

                <!-- Location -->
                <div class="flex items-start gap-6 bg-white/50 backdrop-blur-md rounded-2xl p-6 hover:scale-105 transition">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-1">Adresse</h4>
                        <p class="text-gray-600">{{ $developer['localisation'] }}</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white/50 backdrop-blur-md rounded-2xl p-6">
                    <h4 class="font-bold text-gray-800 mb-4">Suivez-moi</h4>
                    <div class="flex gap-4">
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
    </div>
</section>
@endsection
