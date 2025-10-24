<nav class="fixed top-0 left-0 w-full bg-white/20 backdrop-blur-xl shadow-lg z-50 border-b border-white/30">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold gradient-text">YA</a>
        <ul class="flex space-x-8">
            <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600 transition font-medium {{ request()->routeIs('home') ? 'text-purple-600 font-bold' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 transition font-medium {{ request()->routeIs('about') ? 'text-purple-600 font-bold' : '' }}">About</a></li>
            <li><a href="{{ route('projects.index') }}" class="text-gray-700 hover:text-purple-600 transition font-medium {{ request()->routeIs('projects.*') ? 'text-purple-600 font-bold' : '' }}">Projects</a></li>
            <li><a href="{{ route('home') }}#contact" class="text-gray-700 hover:text-purple-600 transition font-medium">Contact</a></li>
        </ul>
    </div>
</nav>
