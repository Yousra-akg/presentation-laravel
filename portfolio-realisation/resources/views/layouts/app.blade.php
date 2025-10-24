<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio — Yousra Akajou')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            zoom: 0.85;
            -moz-transform: scale(0.85);
            -moz-transform-origin: top center;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(5deg); }
        }
        @keyframes floatSlow {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(20px, -20px) scale(1.05); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(168, 85, 247, 0.4); }
            50% { box-shadow: 0 0 40px rgba(168, 85, 247, 0.8); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-float { animation: float 8s ease-in-out infinite; }
        .animate-float-slow { animation: floatSlow 10s ease-in-out infinite; }
        .animate-slide-in { animation: slideIn 0.8s ease-out forwards; }
        .animate-fade-in { animation: fadeIn 1s ease-out forwards; }
        .animate-scale-in { animation: scaleIn 0.6s ease-out forwards; }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .stat-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0.05) 100%);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
        }
        .floating-icon {
            position: absolute;
            animation: float 6s ease-in-out infinite;
        }
        .social-icon {
            transition: all 0.3s ease;
        }
        .social-icon:hover {
            transform: scale(1.2) rotate(5deg);
        }
        .project-card {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .project-card:hover {
            transform: translateY(-15px);
        }
        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }
        .project-card:hover::before {
            opacity: 1;
        }
        .project-image-container {
            position: relative;
            overflow: hidden;
            height: 280px;
        }
        .project-image {
            transition: transform 0.5s ease;
        }
        .project-card:hover .project-image {
            transform: scale(1.15);
        }
        .project-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: flex-end;
            padding: 2rem;
            z-index: 2;
        }
        .project-card:hover .project-overlay {
            opacity: 1;
        }
        .filter-btn {
            transition: all 0.3s ease;
        }
        .filter-btn.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: scale(1.05);
        }
        .tech-badge {
            transition: all 0.3s ease;
        }
        .tech-badge:hover {
            transform: scale(1.1) rotate(5deg);
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .skill-card {
            transition: all 0.3s ease;
        }
        .skill-card:hover {
            transform: translateY(-10px) scale(1.05);
        }
        @yield('styles')
    </style>
</head>
<body class="bg-gradient-to-br from-purple-100 via-blue-50 to-pink-100 text-gray-800 font-sans antialiased overflow-x-hidden">
    
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    @yield('scripts')
</body>
</html>
