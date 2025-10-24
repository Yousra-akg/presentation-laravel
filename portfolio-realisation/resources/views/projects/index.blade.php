@extends('layouts.app')

@section('title', 'Projects — Yousra Akajou')

@section('content')
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-purple-300 to-pink-300 rounded-full opacity-40 blur-2xl animate-float"></div>
    <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-300 to-cyan-300 rounded-full opacity-40 blur-2xl animate-float-slow"></div>

    <div class="max-w-7xl mx-auto px-6 z-10 relative">
        <div class="text-center mb-16 animate-slide-in">
            <div class="inline-block mb-6">
                <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                    💼 Portfolio de Projets
                </span>
            </div>
            <h1 class="text-6xl font-black mb-6">
                <span class="gradient-text">Mes Réalisations</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Découvrez mes projets de développement web, des applications modernes aux sites innovants
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">
            @foreach($projects as $project)
            <div class="project-card glass-card rounded-3xl overflow-hidden shadow-2xl" data-category="all">
                <div class="project-image-container">
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['titre'] }}" class="project-image w-full h-full object-cover">
                    <div class="project-overlay">
                        <div class="text-white">
                            <h3 class="text-2xl font-bold mb-2">{{ $project['titre'] }}</h3>
                            <p class="text-sm opacity-90">{{ Str::limit($project['description'], 50) }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 relative z-10">
                    <h3 class="text-xl font-bold mb-3 text-purple-700">{{ $project['titre'] }}</h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        {{ Str::limit($project['description'], 120) }}
                    </p>
                    <div class="flex gap-3">
                        <a href="{{ route('projects.show', $project['id']) }}" class="inline-block bg-gradient-to-r from-purple-500 to-blue-500 text-white px-6 py-3 rounded-full font-bold hover:shadow-lg transition">
                            Voir Détails
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-20 glass-card rounded-3xl p-12 shadow-2xl animate-fade-in">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Vous avez un projet en tête ?</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Je serais ravi de discuter de votre projet et de voir comment nous pouvons travailler ensemble pour le réaliser !
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ route('home') }}#contact" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                    Démarrer un Projet
                </a>
                <a href="{{ route('about') }}" class="bg-white/40 backdrop-blur-md text-purple-700 px-8 py-4 rounded-full font-bold border-2 border-white/50 hover:bg-white/60 transition">
                    En Savoir Plus
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                if (filter === 'all') {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    const categories = card.getAttribute('data-category').split(' ');
                    if (categories.includes(filter)) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
</script>
@endsection
