<?php
// school-app/index.php

// 1. Language Configuration
$allowed_langs = ['pt', 'en', 'es'];
$lang = $_GET['lang'] ?? 'pt';
if (!in_array($lang, $allowed_langs)) {
    $lang = 'pt';
}


// Custom Overrides for this Landing Page (Startup Vibe)
$page_t = [
    'pt' => [
        'meta_title' => 'BluEduca | CRM Escolar, App Escolar e Gestão Inteligente',
        'meta_desc' => 'O melhor CRM escolar e app de comunicação para escolas particulares. Automação financeira, pedagógica e aplicativo escolar completo.',
        'meta_keywords' => 'crm escolar, app escolar, aplicativo escolar, gestão escolar, software escolar, sistema para escolas, aplicativo comunicação escolar, gestão pedagógica, software gestão escolar brasil',
        'hero_badge' => '2.0 CHEGOU',
        'hero_title' => 'Gestão Escolar <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0c46e6] to-[#00d2ff]">Simplesmente Uau.</span>',
        'hero_subtitle' => 'Esqueça apps lentos e complexos. Experimente a nova era da conexão entre pais e escola. Seguro, rápido e inteligente.',
        'cta_primary' => 'Ver Demo Live',
        'cta_secondary' => 'Para Escolas',
        'stats_1' => '100% Mobile',
        'stats_1_desc' => 'Sem instalação',
        'stats_2' => 'Zero',
        'stats_2_desc' => 'Delay nas notas',
        'card_1_title' => 'Boletim',
        'card_1_val' => '10.0',
        'card_2_title' => 'Comunicado',
        'card_2_val' => 'Novo!',
    ],
    'en' => [
        'meta_title' => 'BluEduca | School CRM, School App and Smart Management',
        'meta_desc' => 'The best school CRM and communication app for private schools. Financial, pedagogical automation, and a complete school application.',
        'meta_keywords' => 'school cm, school app, educational application, school management, school software, edutech, pedagogical management, online school system',
        'hero_badge' => '2.0 IS HERE',
        'hero_title' => 'School Mkmt <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0c46e6] to-[#00d2ff]">Simply Wow.</span>',
        'hero_subtitle' => 'Forget slow, complex apps. Experience the new era of parent-school connection. Fast, beautiful, and smart.',
        'cta_primary' => 'Live Demo',
        'cta_secondary' => 'For Schools',
        'stats_1' => '100% Mobile',
        'stats_1_desc' => 'No install',
        'stats_2' => 'Zero',
        'stats_2_desc' => 'Delay on grades',
        'card_1_title' => 'Grade',
        'card_1_val' => 'A+',
        'card_2_title' => 'Notice',
        'card_2_val' => 'New!',
    ],
    'es' => [
        'meta_title' => 'BluEduca | CRM Escolar, App Escolar y Gestión Inteligente',
        'meta_desc' => 'El mejor CRM escolar y app de comunicación para colegios privados. Automatización financiera, pedagógica y aplicación escolar completa.',
        'meta_keywords' => 'crm escolar, app escolar, aplicación escolar, gestión escolar, software educativo, sistema para escuelas, gerencia pedagógica',
        'hero_badge' => 'LLEGÓ EL 2.0',
        'hero_title' => 'Gestión Escolar <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0c46e6] to-[#00d2ff]">Simplemente Guau.</span>',
        'hero_subtitle' => 'Olvida las apps lentas. Experimenta la nueva era de conexión padres-escuela. Rápido, hermoso e inteligente.',
        'cta_primary' => 'Ver Demo',
        'cta_secondary' => 'Para Escuelas',
        'stats_1' => '100% Móvil',
        'stats_1_desc' => 'Sin instalación',
        'stats_2' => 'Cero',
        'stats_2_desc' => 'Retraso en notas',
        'card_1_title' => 'Boletín',
        'card_1_val' => '10.0',
        'card_2_title' => 'Aviso',
        'card_2_val' => '¡Nuevo!',
    ]
];

$pt = $page_t[$lang];

// SEO Meta Data
$meta_title = $pt['meta_title'];
$meta_desc = $pt['meta_desc'];
$meta_keys = $pt['meta_keywords'];
$canonical = "https://blueduca.com.br" . ($_SERVER['REQUEST_URI'] == '/' ? '' : rtrim($_SERVER['REQUEST_URI'], '.php'));

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <link rel="icon" type="image/png" href="assets/img/logo_app.png">
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="keywords" content="<?php echo $meta_keys; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="https://blueduca.com.br/assets/img/logo_completo.png">
    <meta property="og:site_name" content="BluEduca">
    <meta property="og:locale" content="<?php echo $lang == 'pt' ? 'pt_BR' : ($lang == 'en' ? 'en_US' : 'es_ES'); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $canonical; ?>">
    <meta property="twitter:title" content="<?php echo $meta_title; ?>">
    <meta property="twitter:description" content="<?php echo $meta_desc; ?>">
    <meta property="twitter:image" content="https://blueduca.com.br/assets/img/logo_completo.png">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "BluEduca",
      "operatingSystem": "Web, Android, iOS",
      "applicationCategory": "EducationalApplication",
      "offers": {
        "@type": "Offer",
        "price": "0.00",
        "priceCurrency": "BRL"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "ratingCount": "120"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "BluEduca",
      "url": "https://blueduca.com.br",
      "logo": "https://blueduca.com.br/assets/img/logo_completo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+55-11-98725-3394",
        "contactType": "customer service",
        "areaServed": "BR",
        "availableLanguage": ["Portuguese", "English", "Spanish"]
      },
      "sameAs": [
        "https://www.instagram.com/blueduca",
        "https://www.linkedin.com/company/blueduca"
      ]
    }
    </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js for lightweight interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts: Plus Jakarta Sans for that 'Tech Startup' look -->
    <!-- Google Fonts: Plus Jakarta Sans (Tech) & Lora (Serif for 'Educa') -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Lora:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #0f172a;
            overflow-x: hidden;
            width: 100%;
            -webkit-font-smoothing: antialiased;
        }

        /* Tech Grid Background */
        .tech-grid {
            background-size: 50px 50px;
            background-image:
                linear-gradient(to right, rgba(12, 70, 230, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(12, 70, 230, 0.03) 1px, transparent 1px);
            mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
        }

        .blob-gradient {
            background: linear-gradient(135deg, #0c46e6 0%, #00d2ff 100%);
            filter: blur(80px);
            opacity: 0.15;
            z-index: 0;
        }

        /* Glassmorphism Cards with a 'Tech' Edge */
        .tech-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow:
                0 4px 6px -1px rgba(0, 0, 0, 0.05),
                0 2px 4px -1px rgba(0, 0, 0, 0.03),
                0 0 0 1px rgba(12, 70, 230, 0.05);
            /* Subtle border ring */
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow:
                0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04),
                0 0 0 1px rgba(12, 70, 230, 0.2);
        }

        /* Dynamic Floating */
        @keyframes float-y {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(12, 70, 230, 0.2);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(12, 70, 230, 0);
            }

            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(12, 70, 230, 0);
            }
        }

        @keyframes pulse-whatsapp {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.4);
            }

            70% {
                box-shadow: 0 0 0 20px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        .animate-whatsapp {
            animation: pulse-whatsapp 2s infinite;
        }

        .animate-float {
            animation: float-y 6s ease-in-out infinite;
        }

        .animate-pulse-ring {
            animation: pulse-ring 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Typography tweaks */
        @keyframes chart-height {

            0%,
            100% {
                height: var(--base-h);
            }

            50% {
                height: calc(var(--base-h) * 1.15);
            }
        }

        .animate-chart-height {
            animation: chart-height 3s ease-in-out infinite;
        }

        .glass-os {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        .kerning-tight {
            letter-spacing: -0.04em;
        }

        /* Utility to hide scrollbar for clean carousel */
        .hide-scrollbars::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbars {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        [x-cloak] {
            display: none !important;
        }

        .shadow-glow {
            box-shadow: 0 0 15px -3px rgba(12, 70, 230, 0.4);
        }

        .quiz-option:hover .quiz-icon {
            transform: scale(1.1) rotate(5deg);
        }

        /* Comparison Animations */
        @keyframes slide-pop {
            0% {
                transform: translateY(30px) scale(0.9);
                opacity: 0;
            }

            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        @keyframes chaos-wiggle {

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-1deg);
            }

            75% {
                transform: rotate(1deg);
            }
        }

        .animate-pop {
            animation: slide-pop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .animate-chaos-soft {
            animation: chaos-wiggle 4s ease-in-out infinite;
        }

        .animate-evolution-float {
            animation: float-y 5s ease-in-out infinite;
        }

        @keyframes marquee-vertical {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
            }
        }

        .animate-marquee {
            animation: marquee-vertical 20s linear infinite;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
    <style>
        /* Global Overflow Fix */
        html,
        body {
            overflow-x: hidden;
            width: 100%;
            position: relative;
        }

        /* Custom Scrollbar Update */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        .glass-os {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }

        .blob-animate {
            animation: blob 7s infinite;
        }

        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .ticker-wrap {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .ticker {
            display: inline-block;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(-50%, 0, 0);
            }
        }

        .animate-marquee-slow {
            animation: marquee 60s linear infinite;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="selection:bg-[#0c46e6] selection:text-white relative">

    <!-- Custom BluEduca Navbar -->
    <!-- Fixed Top Navbar with Glassmorphism -->
    <nav class="fixed z-50 w-full top-0 px-4 pt-4 md:pt-6" x-data="{ mobileMenuOpen: false }">
        <div
            class="max-w-5xl mx-auto bg-white/70 backdrop-blur-xl border border-white/40 rounded-3xl md:rounded-full px-6 py-3 flex items-center justify-between shadow-2xl shadow-black/5 ring-1 ring-black/5">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group relative z-[60]">
                <img src="assets/img/logo_completo.png"
                    alt="BluEduca - Melhor Sistema de Gestão Escolar e App de Comunicação"
                    class="h-7 md:h-9 w-auto group-hover:scale-105 transition-transform duration-300">
            </a>

            <!-- Desktop Links (md+) -->
            <div class="hidden md:flex items-center gap-2">
                <a href="#features"
                    class="px-5 py-2 text-sm font-bold text-slate-600 hover:text-[#0c46e6] hover:bg-blue-50/50 rounded-full transition-all">Recursos</a>
                <a href="#solutions"
                    class="px-5 py-2 text-sm font-bold text-slate-600 hover:text-[#0c46e6] hover:bg-blue-50/50 rounded-full transition-all">Soluções</a>
                <a href="#contact"
                    class="px-5 py-2 text-sm font-bold text-white bg-[#0c46e6] hover:bg-blue-600 rounded-full shadow-lg shadow-blue-500/20 transition-all">Comece
                    Agora</a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden relative z-[60] p-2 text-slate-600 hover:text-[#0c46e6] transition-colors">
                <i data-lucide="menu" x-show="!mobileMenuOpen" class="w-6 h-6"></i>
                <i data-lucide="x" x-show="mobileMenuOpen" class="w-6 h-6" x-cloak></i>
            </button>

        </div>

        <!-- Mobile Drawer (Ultra Premium Overlay) -->
        <template x-teleport="body">
            <div x-show="mobileMenuOpen" class="fixed inset-0 z-[100] md:hidden overflow-hidden" x-cloak>

                <!-- Animated Background Overlay -->
                <div class="absolute inset-0 bg-[#0094ee]/90 backdrop-blur-2xl" x-show="mobileMenuOpen"
                    x-transition:enter="transition opacity duration-500" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition opacity duration-400"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                    <!-- Dynamic Blobs -->
                    <div
                        class="absolute top-[-5%] right-[-10%] w-[350px] h-[350px] bg-blue-600/20 rounded-full blur-[120px] animate-pulse">
                    </div>
                    <div class="absolute bottom-[-5%] left-[-10%] w-[350px] h-[350px] bg-purple-600/20 rounded-full blur-[120px] animate-pulse"
                        style="animation-delay: 1.5s;"></div>
                </div>

                <!-- Drawer Content Container -->
                <div x-show="mobileMenuOpen" x-transition:enter="transition cubic-bezier(0.16, 1, 0.3, 1) duration-700"
                    x-transition:enter-start="translate-y-full opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100"
                    x-transition:leave="transition cubic-bezier(0.16, 1, 0.3, 1) duration-500"
                    x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
                    class="relative h-full w-full flex flex-col p-8 pt-10 overflow-y-auto">

                    <!-- Top Header -->
                    <div class="flex items-center justify-between mb-12">
                        <img src="assets/img/logo_completo.png" alt="BluEduca" class="h-8 w-auto brightness-0 invert">
                        <button @click="mobileMenuOpen = false"
                            class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white active:scale-90 transition-all">
                            <i data-lucide="x" class="w-6 h-6"></i>
                        </button>
                    </div>

                    <!-- Navigation Cards -->
                    <div class="flex flex-col gap-4">
                        <a href="#features" @click="mobileMenuOpen = false"
                            class="group relative flex flex-col p-6 rounded-[2.5rem] bg-white/5 border border-white/10 active:bg-white/10 transition-all overflow-hidden">
                            <div
                                class="absolute top-0 right-0 p-6 opacity-20 group-active:scale-125 transition-transform duration-500">
                                <i data-lucide="rocket" class="w-12 h-12 text-white"></i>
                            </div>
                            <span class="text-3xl font-extrabold text-white tracking-tight">Recursos</span>
                            <span class="text-sm text-blue-100 mt-1">Tecnologia que conecta a escola</span>
                        </a>

                        <a href="#solutions" @click="mobileMenuOpen = false"
                            class="group relative flex flex-col p-6 rounded-[2.5rem] bg-white/5 border border-white/10 active:bg-white/10 transition-all overflow-hidden">
                            <div
                                class="absolute top-0 right-0 p-6 opacity-20 group-active:scale-125 transition-transform duration-500">
                                <i data-lucide="layers" class="w-12 h-12 text-white"></i>
                            </div>
                            <span class="text-3xl font-extrabold text-white tracking-tight">Soluções</span>
                            <span class="text-sm text-blue-100 mt-1">Para cada desafio escolar</span>
                        </a>

                        <a href="#contact" @click="mobileMenuOpen = false"
                            class="group relative flex flex-col p-6 rounded-[2.5rem] bg-white/5 border border-white/10 active:bg-white/10 transition-all overflow-hidden">
                            <div
                                class="absolute top-0 right-0 p-6 opacity-20 group-active:scale-125 transition-transform duration-500">
                                <i data-lucide="phone" class="w-12 h-12 text-white"></i>
                            </div>
                            <span class="text-3xl font-extrabold text-white tracking-tight">Contato</span>
                            <span class="text-sm text-blue-100 mt-1">Fale com um especialista</span>
                        </a>
                    </div>

                    <!-- Drawer Footer -->
                    <div class="mt-auto pt-10">
                        <div class="bg-white rounded-[2.5rem] p-6 mb-8 flex items-center justify-between group active:scale-95 transition-all cursor-pointer shadow-lg"
                            @click="window.location.href='#contact'; mobileMenuOpen = false">
                            <div>
                                <h4 class="text-[#0094ee] font-extrabold">Agendar Demo</h4>
                                <p class="text-slate-400 text-xs text-blue-900/60 font-medium">Comece grátis hoje</p>
                            </div>
                            <div
                                class="w-12 h-12 rounded-2xl bg-[#0094ee]/10 flex items-center justify-center text-[#0094ee]">
                                <i data-lucide="arrow-right" class="w-6 h-6"></i>
                            </div>
                        </div>

                        <div class="flex items-center justify-between px-2">
                            <div class="flex flex-col">
                                <span class="text-[10px] font-bold text-blue-100 uppercase tracking-widest">BluEduca
                                    v2.0</span>
                                <span class="text-blue-100/80 text-[10px]">Simply Wow Experience</span>
                            </div>
                            <a href="https://instagram.com/app.blueduca" target="_blank"
                                class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white">
                                <i data-lucide="instagram" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </nav>

    <!-- Main Content -->
    <main class="relative w-full overflow-hidden">

        <!-- Background Elements -->
        <div class="absolute inset-0 tech-grid z-0"></div>
        <div class="absolute top-[-10%] left-[-10%] w-[600px] h-[600px] blob-gradient rounded-full"></div>
        <div
            class="absolute bottom-[10%] right-[-5%] w-[500px] h-[500px] bg-sky-200 blur-[100px] opacity-20 rounded-full z-0">
        </div>

        <section class="max-w-6xl mx-auto px-6 lg:px-8 pt-36 lg:pt-24 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Left Content: The Pitch -->
                <div class="lg:col-span-5 flex flex-col items-center lg:items-start text-center lg:text-left">



                    <!-- Headline -->
                    <!-- Reduced mobile text size to text-5xl to prevent overflow on small screens -->
                    <h1
                        class="text-6xl sm:text-5xl lg:text-8xl font-extrabold text-slate-900 leading-[1.0] kerning-tight mb-8">
                        Sistema de <br />
                        Gestão Escolar <br />
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#0c46e6] to-[#00d2ff] relative z-10">
                            Simplesmente
                        </span>
                        <!-- Fixed width container for dynamic text to prevent layout shift -->
                        <!-- Adjusted min-width for mobile (280px) and desktop (480px) -->
                        <span id="typewriter-text"
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#0c46e6] to-[#00d2ff] inline-block text-left min-w-[200px] lg:min-w-[400px] relative top-1 z-20">
                            Uauuu! <img
                                src="assets/img/winking-smiley-face-emoji-expressing-playful-cheeky-feelings-digital-format.png"
                                class="inline-block w-16 h-16 lg:w-24 lg:h-24 -mt-6 lg:-mt-10 ml-1 animate-bounce relative z-30"
                                alt="Experiência Uau com o Software Escolar BluEduca">
                        </span>
                    </h1>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            // Words array - Supports HTML strings now
                            const words = [
                                "Gerenciável.",
                                "Intuitiva.",
                                "Completa.",
                                'Uauuu! <img src="assets/img/winking-smiley-face-emoji-expressing-playful-cheeky-feelings-digital-format.png" class="inline-block w-16 h-16 lg:w-24 lg:h-24 -mt-6 lg:-mt-10 ml-1 animate-bounce relative z-30" alt="Wow">'
                            ];
                            const element = document.getElementById('typewriter-text');
                            let wordIndex = 0;
                            let charIndex = 0; // Tracks character count for deletion/typing logic
                            let isDeleting = false;

                            // Initialize to match the static HTML content (In                                       dex 3)
                            wordIndex = 3;
                            // For HTML strings, we treat the whole string as "typed" instantly or careful slicing.
                            // Simplified approach: If it detects a tag start '<', it types until '>' instantly.
                            // But for deletion, we will just delete character by character, which might look weird for HTML.
                            // BETTER APPROACH: Just treat the HTML tag as a single "character" chunk or handle generic typing.
                            // Given the requirement, let's keep it simple: 
                            // If the current word contains HTML, we treat typing/deleting slightly differently 
                            // OR we just use a helper that strips tags for length but inserts full HTML? No, that's hard.
                            //
                            // Hacky but robust for this specific case:
                            // We will type the text part character by character. 
                            // If the word has an Image (the "Uau"), we append the image at the end instantly.

                            let currentText = ""; // Accumulates text being typed

                            function type() {
                                const fullString = words[wordIndex];
                                // Check if this string is the special HTML one
                                const isRich = fullString.includes('<img');
                                const textPart = isRich ? fullString.split('<')[0] : fullString;
                                const htmlPart = isRich ? fullString.substring(fullString.indexOf('<')) : '';

                                if (isDeleting) {
                                    // Deleting: Just chop characters. 
                                    // If we are rich, remove image first (all at once), then text char by char
                                    if (isRich && element.innerHTML.includes('<img')) {
                                        // Remove image first
                                        element.innerHTML = textPart;
                                        charIndex = textPart.length;
                                    } else {
                                        // Normal text deletion
                                        element.textContent = textPart.substring(0, charIndex - 1);
                                        charIndex--;
                                    }
                                } else {
                                    // Typing
                                    // Calculate what to show
                                    element.textContent = textPart.substring(0, charIndex + 1);
                                    charIndex++;

                                    // If we finished typing the text part and it's rich, add the image
                                    if (isRich && charIndex === textPart.length) {
                                        element.innerHTML = textPart + htmlPart;
                                    }
                                }

                                // State Transition Logic
                                let typeSpeed = isDeleting ? 40 : 80;

                                if (!isDeleting && charIndex === textPart.length) {
                                    // End of word
                                    // Make "Uauuu!" stay longer (Standard 2000ms + 3000ms = 5000ms)
                                    typeSpeed = isRich ? 5000 : 2000;
                                    isDeleting = true;
                                } else if (isDeleting && charIndex === 0) {
                                    // Start of new word
                                    isDeleting = false;
                                    wordIndex = (wordIndex + 1) % words.length;
                                    typeSpeed = 200;
                                }

                                setTimeout(type, typeSpeed);
                            }

                            // Start Loop
                            // Initial State is "Uauuu! <img...>" fully visible.
                            // We want to wait 2s, then start deleting.
                            // Set internal state to "End of Rich Word, Index 3"

                            // Ensure element starts correctly
                            element.innerHTML = words[3];

                            const textOnly = words[3].split('<')[0]; // "Uauuu! "
                            charIndex = textOnly.length; // Set index to end of text
                            isDeleting = true; // Next action is delete

                            setTimeout(type, 2000);
                        });
                    </script>

                    <!--Subtitle -->
                    <p class="text-base text-slate-600 mb-2 max-w-md leading-relaxed font-medium">
                        <?php echo $pt['hero_subtitle']; ?>
                    </p>




                </div>

                <!-- Right Content: The Visual (Surprised Man + Tech UI) -->
                <div
                    class="lg:col-span-7 relative h-full flex items-end justify-center lg:justify-end mt-3 lg:mt-0 lg:translate-y-24">

                    <!-- Immersive Background Glows (No more white wash) -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-tr from-[#0c46e6]/20 to-cyan-400/20 rounded-full blur-[80px] animate-pulse-ring z-0">
                    </div>

                    <!-- The Surprised Man Image (Full Height Integration) -->
                    <div class="relative z-10 w-full max-w-lg lg:max-w-xl mx-auto flex items-end h-full">
                        <img src="assets/img/surprised-young-man-green-shirt-holding-smartphone-transparent-background.png"
                            alt="Gestor escolar utilizando o aplicativo de gestão BluEduca no celular"
                            class="w-full h-auto object-contain object-bottom drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] relative z-10 transform scale-110 origin-bottom">

                        <!-- Dynamic Notification Feed Container -->
                        <!-- Positioned to be 'floating' in the air, roughly between phone level and shoulder/head level -->
                        <div id="notification-feed"
                            class="absolute top-[15%] right-0 scale-75 origin-right lg:scale-100 lg:top-[20%] lg:right-[-15%] w-72 flex flex-col gap-4 z-20 pointer-events-none h-64 justify-end overflow-hidden pb-4">
                            <!-- Cards will be injected here by JS -->
                        </div>

                        <!-- Floating Tech Card 1: Main Grade (Boletim) - Keep this as a static anchor for "Success" -->
                        <div
                            class="absolute top-[35%] left-4 scale-[0.6] origin-left lg:top-[20%] lg:left-[-20%] lg:scale-100 z-30 min-w-[220px]">
                            <div class="glass-os p-4 rounded-[2rem] flex items-center gap-4 animate-float">
                                <div
                                    class="w-14 h-14 rounded-full bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center text-white shadow-lg shadow-green-500/30">
                                    <i data-lucide="award" class="w-7 h-7"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">
                                        <?php echo $pt['card_1_title']; ?> (Mat)
                                    </p>
                                    <div class="flex items-baseline gap-1">
                                        <p class="text-4xl font-black text-slate-800 leading-none tracking-tighter">
                                            <?php echo $pt['card_1_val']; ?>
                                        </p>
                                        <i data-lucide="check-circle-2"
                                            class="w-5 h-5 text-green-500 fill-green-100"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Tech Card 3: Financial/Success (Bottom Left) -->
                        <div
                            class="absolute bottom-[40%] left-4 scale-75 origin-left lg:left-[-5%] lg:top-[33%] lg:bottom-[50%] lg:scale-100 z-30 transform -rotate-1">
                            <div class="glass-os px-5 py-3 rounded-full animate-float shadow-2xl flex items-center gap-3"
                                style="animation-delay: 3.5s;">
                                <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                                <span class="text-sm font-bold text-slate-700">Mensalidade: Paga ✅</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- "Solucione Desafios" / Solutions Carousel Section -->
        <section class="py-24 bg-white relative z-20">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-16">
                    <span class="text-[#0c46e6] font-bold tracking-wider uppercase text-xs mb-2 block">Desafios
                        Comuns</span>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-4">Solucione desafios de
                        comunicação</h2>
                    <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                        Transformamos os principais problemas da rotina escolar em <span
                            class="text-[#0c46e6] font-bold">soluções simples</span>.
                    </p>
                </div>

                <!-- Carousel / Grid Container -->
                <!-- Mobile: Horizontal Scroll Snap | Desktop: Grid -->
                <div
                    class="flex overflow-x-auto pb-8 gap-6 lg:grid lg:grid-cols-4 lg:gap-8 lg:pb-0 snap-x snap-mandatory hide-scrollbars">

                    <!-- Card 1: WhatsApp -->
                    <div class="min-w-[300px] w-[85%] md:w-[45%] lg:w-auto snap-center">
                        <div
                            class="h-full bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:border-blue-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group flex flex-col relative overflow-hidden bg-white/50 backdrop-blur-sm">
                            <div
                                class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform border border-slate-100 relative">
                                <!-- WhatsApp Brand Icon (Green) -->
                                <svg viewBox="0 0 24 24" class="w-8 h-8 text-[#25D366] fill-current"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.362-5.26c0-5.435 4.421-9.856 9.863-9.856 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.435-4.423 9.856-9.865 9.856" />
                                </svg>
                                <!-- Red X Badge (Notification Style) -->
                                <div
                                    class="absolute -top-2 -right-2 w-6 h-6 bg-red-100 rounded-full flex items-center justify-center border-2 border-white">
                                    <i data-lucide="x" class="w-3 h-3 text-red-500 stroke-[3]"></i>
                                </div>
                            </div>
                            <h3
                                class="text-xl font-bold text-slate-900 mb-3 group-hover:text-[#0c46e6] transition-colors">
                                Adeus, WhatsApp</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                Centralize a comunicação e evite a exposição de números pessoais e grupos
                                desorganizados.
                            </p>
                            <!-- Details List -->
                            <ul class="space-y-3 mt-auto border-t border-slate-100 pt-6">
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="lock" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Números 100% privados</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="users" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Sem conversa paralela</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="shield-check" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Histórico seguro</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2: After Hours -->
                    <div class="min-w-[300px] w-[85%] md:w-[45%] lg:w-auto snap-center">
                        <div
                            class="h-full bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:border-blue-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group flex flex-col relative overflow-hidden bg-white/50 backdrop-blur-sm">
                            <div
                                class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-orange-500 mb-6 shadow-sm group-hover:scale-110 transition-transform border border-slate-100">
                                <i data-lucide="clock" class="w-7 h-7"></i>
                            </div>
                            <h3
                                class="text-xl font-bold text-slate-900 mb-3 group-hover:text-[#0c46e6] transition-colors">
                                Horários Definidos</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                Sua equipe merece descanso. Defina janelas de atendimento sem perder a proximidade.
                            </p>
                            <!-- Details List -->
                            <ul class="space-y-3 mt-auto border-t border-slate-100 pt-6">
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="calendar-clock" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Atendimento configurável</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="send" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Agendamento de envios</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="bot" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Respostas automáticas</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 3: Read Receipts -->
                    <div class="min-w-[300px] w-[85%] md:w-[45%] lg:w-auto snap-center">
                        <div
                            class="h-full bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:border-blue-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group flex flex-col relative overflow-hidden bg-white/50 backdrop-blur-sm">
                            <div
                                class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-green-500 mb-6 shadow-sm group-hover:scale-110 transition-transform border border-slate-100">
                                <i data-lucide="check-check" class="w-7 h-7"></i>
                            </div>
                            <h3
                                class="text-xl font-bold text-slate-900 mb-3 group-hover:text-[#0c46e6] transition-colors">
                                Garantia de Leitura</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                Tenha controle total sobre quem recebeu a informação. Chega de "não fiquei sabendo".
                            </p>
                            <!-- Details List -->
                            <ul class="space-y-3 mt-auto border-t border-slate-100 pt-6">
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="eye" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Quem leu e quando</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="bell-ring" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Push Notifications</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="filter" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Filtro de não-lidos</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 4: Engagement -->
                    <div class="min-w-[300px] w-[85%] md:w-[45%] lg:w-auto snap-center">
                        <div
                            class="h-full bg-slate-50 rounded-[2rem] p-8 border border-slate-100 hover:border-blue-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group flex flex-col relative overflow-hidden bg-white/50 backdrop-blur-sm">
                            <div
                                class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-[#0c46e6] mb-6 shadow-sm group-hover:scale-110 transition-transform border border-slate-100">
                                <i data-lucide="sparkles" class="w-7 h-7"></i>
                            </div>
                            <h3
                                class="text-xl font-bold text-slate-900 mb-3 group-hover:text-[#0c46e6] transition-colors">
                                Famílias Engajadas</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                O app que os pais amam. Uma experiência moderna, visual e intuitiva como as redes
                                sociais.
                            </p>
                            <!-- Details List -->
                            <ul class="space-y-3 mt-auto border-t border-slate-100 pt-6">
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="layout-grid" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Feed visual (Timeline)</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="image" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Fotos e vídeos HD</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-slate-600">
                                    <i data-lucide="calendar" class="w-4 h-4 text-[#0c46e6] mt-0.5 shrink-0"></i>
                                    <span>Agenda integrada</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Mobile Swipe Indicator -->
                <div class="flex lg:hidden justify-center gap-2 mt-2">
                    <div class="w-2 h-2 rounded-full bg-blue-200"></div>
                    <div class="w-2 h-2 rounded-full bg-slate-200"></div>
                    <div class="w-2 h-2 rounded-full bg-slate-200"></div>
                    <div class="w-2 h-2 rounded-full bg-slate-200"></div>
                </div>

            </div>
        </section>

        <!-- "Solutions" / Deep Dive Section (Existing) -->
        <!-- ... (Keeping existing previous code flow) ... -->

        <!-- CRM / Leads Module Section (NEW) -->
        <section class="py-32 bg-slate-50 relative z-20 overflow-hidden border-t border-slate-200">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">

                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <!-- Text Content -->
                    <div class="order-2 lg:order-1">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100 text-[#0c46e6] font-bold text-xs uppercase tracking-wider mb-8">
                            <i data-lucide="zap" class="w-4 h-4"></i>
                            Novo Módulo 2026
                        </div>
                        <h2
                            class="text-4xl lg:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight leading-tight">
                            Sua Escola, <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-[#0c46e6] to-[#00d2ff]">Lotada.</span>
                        </h2>
                        <h3 class="text-xl font-bold text-slate-600 mb-6">Adeus, planilhas. Gerencie seus leads com um
                            CRM feito para escolas.</h3>

                        <p class="text-slate-500 text-lg leading-relaxed mb-8">
                            Do primeiro "oi" até a assinatura do contrato. Nosso CRM integra nativamente com a
                            secretaria, eliminando retrabalho e garantindo que nenhuma oportunidade seja perdida.
                        </p>

                        <ul class="space-y-4 mb-10">
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 shrink-0 mt-0.5">
                                    <i data-lucide="kanban" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="block text-slate-900">Funil Visual (Kanban)</strong>
                                    <span class="text-slate-500 text-sm">Visualize em tempo real quem está interessado,
                                        agendou visita ou já fechou.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-[#0c46e6] shrink-0 mt-0.5">
                                    <i data-lucide="mouse-pointer-click" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="block text-slate-900">Conversão em 1 Clique</strong>
                                    <span class="text-slate-500 text-sm">Transforme um Lead em Aluno Matriculado
                                        instantaneamente, sem redigitar dados.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 shrink-0 mt-0.5">
                                    <i data-lucide="history" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <strong class="block text-slate-900">Histórico Completo</strong>
                                    <span class="text-slate-500 text-sm">Cada ligação, WhatsApp ou visita fica
                                        registrada na linha do tempo da família.</span>
                                </div>
                            </li>
                        </ul>

                        <div class="flex items-center gap-4">
                            <a href="#contact"
                                class="inline-flex items-center gap-2 bg-[#0c46e6] text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 hover:scale-105 transition-all shadow-lg shadow-blue-500/30">
                                Quero Conhecer o CRM
                                <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Visual: Mini Kanban Board Construction -->
                    <div class="order-1 lg:order-2 relative">
                        <!-- Background Glow -->
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-blue-200/40 to-cyan-200/40 rounded-[3rem] transform rotate-3 scale-105 blur-2xl">
                        </div>

                        <!-- The Board UI -->
                        <div
                            class="relative bg-white border border-slate-200 p-6 rounded-[2rem] shadow-2xl overflow-hidden min-h-[500px] flex flex-col">
                            <!-- Header UI -->
                            <div class="flex justify-between items-center mb-8 border-b border-slate-100 pb-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-[#0c46e6]">
                                        <i data-lucide="trello" class="w-6 h-6"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800">Pipeline de Matrículas 2026</h4>
                                        <p class="text-xs text-slate-400">42 Oportunidades Ativas</p>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 border-2 border-white"></div>
                                    <div class="w-8 h-8 rounded-full bg-slate-300 border-2 border-white"></div>
                                    <div
                                        class="w-8 h-8 rounded-full bg-[#0c46e6] text-white flex items-center justify-center text-xs font-bold border-2 border-white">
                                        +3</div>
                                </div>
                            </div>

                            <!-- Kanban Columns -->
                            <div class="grid grid-cols-3 gap-4 flex-1">

                                <!-- Column 1: Novo -->
                                <div class="bg-slate-50 rounded-xl p-3 flex flex-col gap-3">
                                    <div
                                        class="flex justify-between items-center text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">
                                        <span>Novos</span>
                                        <span class="bg-slate-200 px-2 py-0.5 rounded text-slate-600">5</span>
                                    </div>
                                    <!-- Kanban Card -->
                                    <div
                                        class="bg-white p-3 rounded-lg shadow-sm border border-slate-100 hover:shadow-md transition-shadow cursor-pointer group">
                                        <div class="flex items-center justify-between mb-2">
                                            <span
                                                class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded-full">WhatsApp</span>
                                            <i data-lucide="more-horizontal" class="w-3 h-3 text-slate-400"></i>
                                        </div>
                                        <p class="text-sm font-bold text-slate-800 mb-1">Família Oliveira</p>
                                        <p class="text-xs text-slate-500 mb-3">Interesse: 6º Ano e 8º Ano</p>
                                        <div class="flex items-center gap-2 text-[10px] text-slate-400">
                                            <i data-lucide="clock" class="w-3 h-3"></i> 2h atrás
                                        </div>
                                    </div>
                                    <!-- Kanban Card -->
                                    <div class="bg-white p-3 rounded-lg shadow-sm border border-slate-100 opacity-60">
                                        <p class="text-sm font-bold text-slate-800 mb-1">Mãe do Pedro</p>
                                        <p class="text-xs text-slate-500">Origem: Instagram</p>
                                    </div>
                                </div>

                                <!-- Column 2: Visita (Focus) -->
                                <div
                                    class="bg-blue-50/50 rounded-xl p-3 flex flex-col gap-3 border border-blue-100 relative">
                                    <div
                                        class="flex justify-between items-center text-xs font-bold text-[#0c46e6] uppercase tracking-wider mb-1">
                                        <span>Visita Agendada</span>
                                        <span class="bg-blue-200 px-2 py-0.5 rounded text-blue-700">2</span>
                                    </div>
                                    <!-- Selected Card (Drag effect simulation) -->
                                    <div
                                        class="bg-white p-3 rounded-lg shadow-xl border border-blue-200 transform scale-105 rotate-1 z-10 relative">
                                        <div
                                            class="absolute -top-2 -right-2 bg-[#0c46e6] text-white p-1 rounded-full shadow-lg animate-bounce">
                                            <i data-lucide="mouse-pointer-2" class="w-3 h-3 fill-current"></i>
                                        </div>
                                        <div class="flex items-center justify-between mb-2">
                                            <span
                                                class="bg-purple-100 text-purple-700 text-[10px] font-bold px-2 py-0.5 rounded-full">Indicação</span>
                                        </div>
                                        <p class="text-sm font-bold text-slate-800 mb-1">Roberto Martins</p>
                                        <p class="text-xs text-slate-500 mb-3">Visita: Amanhã às 14h</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <button
                                                class="bg-green-500 hover:bg-green-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg w-full transition-colors flex items-center justify-center gap-1">
                                                Matricular <i data-lucide="arrow-right" class="w-3 h-3"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column 3: Matriculado -->
                                <div class="bg-green-50/30 rounded-xl p-3 flex flex-col gap-3">
                                    <div
                                        class="flex justify-between items-center text-xs font-bold text-green-600 uppercase tracking-wider mb-1">
                                        <span>Matriculados</span>
                                        <span class="bg-green-200 px-2 py-0.5 rounded text-green-700">12</span>
                                    </div>
                                    <!-- Kanban Card -->
                                    <div class="bg-white p-3 rounded-lg shadow-sm border border-green-100">
                                        <div class="flex items-center justify-between mb-2">
                                            <span
                                                class="bg-green-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center gap-1"><i
                                                    data-lucide="check" class="w-2 h-2"></i> Ganho</span>
                                        </div>
                                        <p class="text-sm font-bold text-slate-800 mb-1">Pai da Sofia</p>
                                        <p class="text-xs text-slate-500">Contrato Assinado!</p>
                                    </div>
                                    <!-- Confetti Area -->
                                    <div class="absolute bottom-10 right-10 pointer-events-none">
                                        <div class="w-2 h-2 bg-red-400 absolute animate-ping"
                                            style="animation-delay: 0.1s"></div>
                                        <div class="w-2 h-2 bg-blue-400 absolute top-4 left-4 animate-ping"
                                            style="animation-delay: 0.3s"></div>
                                        <div class="w-2 h-2 bg-yellow-400 absolute top-[-10px] right-2 animate-ping"
                                            style="animation-delay: 0.5s"></div>
                                    </div>
                                </div>

                            </div>

                            <!-- Automation Toast -->
                            <div
                                class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-slate-900/90 backdrop-blur text-white px-4 py-3 rounded-xl shadow-2xl flex items-center gap-3 w-11/12 animate-pulse">
                                <i data-lucide="bot" class="w-5 h-5 text-green-400"></i>
                                <div>
                                    <p class="text-xs font-bold text-green-400">Automação Ativa</p>
                                    <p class="text-xs text-slate-300">"Ao mover para Matriculado, gerar contrato e
                                        cobrar taxa."</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Régua de Cobrança Module Section (NEW) -->
        <section class="py-32 bg-slate-900 relative z-20 overflow-hidden">
            <!-- Background Gradients -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
                <div
                    class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-[100px] opacity-30">
                </div>
                <div
                    class="absolute bottom-[-10%] left-[-5%] w-[600px] h-[600px] bg-purple-600/20 rounded-full blur-[100px] opacity-30">
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <!-- Visual / Interactive Demo (Left for variation) -->
                    <div class="order-2 lg:order-1 relative">
                        <!-- Realistic CSS iPhone Mockup -->
                        <div
                            class="relative mx-auto border-gray-900 bg-gray-900 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-2xl flex flex-col overflow-hidden ring-1 ring-slate-700/50 transform rotate-[-2deg] hover:rotate-0 transition-transform duration-500">
                            <!-- Notch / Sensors -->
                            <div
                                class="absolute top-0 left-1/2 transform -translate-x-1/2 h-[28px] w-[120px] bg-black rounded-b-[16px] z-20">
                            </div>

                            <!-- Side Buttons -->
                            <div
                                class="h-[32px] w-[3px] bg-gray-800 absolute -left-[17px] top-[72px] rounded-l-lg shadow-sm">
                            </div>
                            <div
                                class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg shadow-sm">
                            </div>
                            <div
                                class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[178px] rounded-l-lg shadow-sm">
                            </div>
                            <div
                                class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg shadow-sm">
                            </div>

                            <!-- Screen -->
                            <div
                                class="flex-1 rounded-[2rem] overflow-hidden bg-[#0b141a] relative flex flex-col w-full h-full">

                                <!-- Status Bar Simulation -->
                                <div class="h-12 bg-[#202c33] w-full flex items-center justify-between px-6 pt-3 z-10">
                                    <span class="text-white text-[10px] font-bold">19:42</span>
                                    <div class="flex gap-1.5">
                                        <div class="w-3 h-3 rounded-full bg-slate-600"></div> <!-- Signal -->
                                        <div class="w-3 h-3 rounded-full bg-slate-600"></div> <!-- WiFi -->
                                        <div class="w-4 h-3 rounded-[2px] bg-slate-600"></div> <!-- Battery -->
                                    </div>
                                </div>

                                <!-- WhatsApp Header -->
                                <div
                                    class="bg-[#202c33] p-3 flex items-center gap-3 shadow-md z-10 border-b border-white/5">
                                    <i data-lucide="arrow-left" class="w-5 h-5 text-slate-300"></i>
                                    <div
                                        class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-white font-bold ring-2 ring-green-600/30">
                                        L</div>
                                    <div class="flex-1">
                                        <p class="text-white text-sm font-bold leading-none">Lucas (Pai)</p>
                                        <p class="text-[10px] text-green-400 font-medium mt-0.5">Online</p>
                                    </div>
                                    <i data-lucide="phone" class="w-4 h-4 text-slate-300"></i>
                                    <i data-lucide="more-vertical" class="w-4 h-4 text-slate-300"></i>
                                </div>

                                <!-- Chat Body -->
                                <div class="flex-1 p-4 flex flex-col gap-3 overflow-hidden relative"
                                    id="chat-messages-container">
                                    <!-- Wallpaper -->
                                    <div
                                        class="absolute inset-0 opacity-[0.06] bg-[url('https://camo.githubusercontent.com/854ec7796790bd556c4d7e35b7e9354019a32c696df870845a7c293670986794/68747470733a2f2f7765622e77686174736170702e636f6d2f696d672f62672d636861742d74696c652d6461726b5f61346265353132653731393562366237333364393131306234303866303735642e706e67')] pointer-events-none">
                                    </div>

                                    <!-- Message 1: 3 Days Before -->
                                    <div class="chat-bubble flex flex-col gap-1 items-center opacity-0 translate-y-4 transition-all duration-700"
                                        style="transition-delay: 500ms;">
                                        <span
                                            class="bg-[#182229] text-slate-500 text-[10px] px-2 py-0.5 rounded shadow-sm mb-2 font-bold tracking-wider">03
                                            AGO</span>
                                        <div
                                            class="self-start bg-[#202c33] rounded-lg rounded-tl-none p-2.5 max-w-[90%] text-xs text-slate-200 shadow-sm relative group w-full border border-white/5">
                                            <p class="leading-relaxed">Olá Lucas! 👋 A mensalidade do
                                                <strong>Pedro</strong> vence em 3 dias.
                                                <br /><br />
                                                <span class="text-slate-400">Linha digitável:</span> <br> <span
                                                    class="font-mono bg-black/20 p-1 rounded text-[10px] block mt-1">34191.79001
                                                    0104...</span>
                                            </p>
                                            <span
                                                class="text-[9px] text-slate-500 flex items-center justify-end gap-1 mt-1">10:00
                                                <i data-lucide="check-check" class="w-3 h-3 text-blue-500"></i></span>
                                        </div>
                                    </div>

                                    <!-- Message 2: Today -->
                                    <div class="chat-bubble flex flex-col gap-1 items-center opacity-0 translate-y-4 transition-all duration-700"
                                        style="transition-delay: 2500ms;">
                                        <span
                                            class="bg-[#182229] text-slate-500 text-[10px] px-2 py-0.5 rounded shadow-sm mb-2 mt-2 font-bold tracking-wider">HOJE</span>
                                        <div
                                            class="self-start bg-[#202c33] rounded-lg rounded-tl-none p-2.5 max-w-[90%] text-xs text-slate-200 shadow-sm relative w-full border border-white/5">
                                            <p>Bom dia! Hoje é o vencimento. Aproveite o desconto de pontualidade. 🚀
                                            </p>
                                            <!-- Fake Pix Button -->
                                            <div
                                                class="mt-2 bg-[#00A884] bg-opacity-10 py-2 rounded text-center border border-[#00A884]/30 cursor-pointer hover:bg-opacity-20 transition-colors">
                                                <span
                                                    class="text-[#00A884] font-bold text-[10px] flex items-center justify-center gap-1"><i
                                                        data-lucide="copy" class="w-3 h-3"></i> Copiar Pix</span>
                                            </div>
                                            <span
                                                class="text-[9px] text-slate-500 flex items-center justify-end gap-1 mt-1">08:00
                                                <i data-lucide="check-check" class="w-3 h-3 text-blue-500"></i></span>
                                        </div>
                                    </div>

                                    <!-- Message 3: Arriving NOW (Simulating "Arriving") -->
                                    <div class="chat-bubble flex flex-col gap-1 items-center opacity-0 translate-y-4 transition-all duration-700"
                                        style="transition-delay: 5500ms;">
                                        <!-- Typing Indicator -->
                                        <div class="self-start bg-[#202c33] rounded-lg rounded-tl-none p-3 max-w-[60px] flex items-center gap-1 shadow-sm border border-white/5 mb-2"
                                            id="typing-indicator">
                                            <div class="w-1.5 h-1.5 bg-slate-500 rounded-full animate-bounce"></div>
                                            <div class="w-1.5 h-1.5 bg-slate-500 rounded-full animate-bounce"
                                                style="animation-delay: 100ms"></div>
                                            <div class="w-1.5 h-1.5 bg-slate-500 rounded-full animate-bounce"
                                                style="animation-delay: 200ms"></div>
                                        </div>

                                        <div class="self-start bg-[#202c33] rounded-lg rounded-tl-none p-2.5 max-w-[90%] text-xs text-slate-200 shadow-sm relative w-full border border-white/5 hidden"
                                            id="final-message">
                                            <p><strong>Atraso detectado:</strong> Oi Lucas, ainda não identificamos o
                                                pagamento. Houve algum imprevisto?</p>
                                            <span
                                                class="text-[9px] text-slate-500 flex items-center justify-end gap-1 mt-1">Agora
                                                <i data-lucide="check" class="w-3 h-3 text-slate-500"></i></span>
                                        </div>
                                    </div>

                                </div>

                                <!-- Input Bar Static -->
                                <div
                                    class="h-14 bg-[#202c33] flex items-center px-2 gap-2 border-t border-white/5 shrink-0 z-10">
                                    <i data-lucide="plus" class="w-6 h-6 text-slate-400"></i>
                                    <div class="flex-1 bg-[#2a3942] h-9 rounded-lg"></div>
                                    <i data-lucide="mic" class="w-6 h-6 text-slate-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Visibility Observer Script -->
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const observer = new IntersectionObserver((entries) => {
                                    entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                            // Animate Bubbles
                                            const bubbles = entry.target.querySelectorAll('.chat-bubble');
                                            bubbles.forEach(b => {
                                                b.classList.remove('opacity-0', 'translate-y-4');
                                            });

                                            // Simulate Typing -> Message Switch
                                            const typing = document.getElementById('typing-indicator');
                                            const finalMsg = document.getElementById('final-message');

                                            if (typing && finalMsg) {
                                                setTimeout(() => {
                                                    typing.style.display = 'none';
                                                    finalMsg.classList.remove('hidden');
                                                    finalMsg.classList.add('animate-fade-in-up'); // Ensure we have a fade in anim
                                                }, 7500); // 5.5s delay + 2s typing
                                            }
                                        }
                                    });
                                }, { threshold: 0.5 });

                                const container = document.getElementById('chat-messages-container');
                                if (container) observer.observe(container);
                            });
                        </script>
                    </div>

                    <!-- Content -->
                    <div class="order-1 lg:order-2 text-white">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 font-bold text-xs uppercase tracking-wider mb-8">
                            <i data-lucide="refresh-cw" class="w-4 h-4 text-blue-400"></i>
                            Nova Régua de Cobrança
                        </div>
                        <!-- Headline -->
                        <h2 class="text-4xl lg:text-5xl font-extrabold mb-6 tracking-tight leading-tight">
                            Inadimplência? <br />
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Esqueça.</span>
                        </h2>
                        <!-- Subtitle -->
                        <h3 class="text-xl font-medium text-slate-400 mb-8 leading-relaxed">
                            Você educa, a gente cobra. Configure nossa régua inteligente uma vez e recupere até <span
                                class="text-white font-bold">40% da receita</span> no piloto automático.
                        </h3>

                        <!-- Key Benefits List -->
                        <div class="space-y-8">
                            <!-- Benefit 1 -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-slate-800 flex items-center justify-center text-blue-400 shrink-0 border border-slate-700">
                                    <i data-lucide="clock" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-white mb-1">Dorme e Cobra</h4>
                                    <p class="text-slate-400 text-sm leading-relaxed">Mensagens automáticas: avisos
                                        prévios, cobrança no vencimento e renegociação pós-atraso. Sem erro humano.</p>
                                </div>
                            </div>
                            <!-- Benefit 2 -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-slate-800 flex items-center justify-center text-green-400 shrink-0 border border-slate-700">
                                    <i data-lucide="smartphone" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-white mb-1">WhatsApp First</h4>
                                    <p class="text-slate-400 text-sm leading-relaxed">98% de taxa de abertura. É
                                        impossível o pai "não ver" a cobrança chegando direto no app que ele mais usa.
                                    </p>
                                </div>
                            </div>
                            <!-- Benefit 3 -->
                            <div class="flex gap-4">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-slate-800 flex items-center justify-center text-purple-400 shrink-0 border border-slate-700">
                                    <i data-lucide="mouse-pointer-click" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-white mb-1">Híbrido e Flexível</h4>
                                    <p class="text-slate-400 text-sm leading-relaxed">Prefere cobrar manualmente? Use o
                                        botão "Cobrar Agora" e envie modelos profissionais com um clique.</p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="mt-10">
                            <a href="#contact"
                                class="inline-flex items-center gap-2 bg-[#0c46e6] text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-600 hover:scale-105 transition-all shadow-lg shadow-blue-500/20 group">
                                Ativar Cobrança Automática
                                <i data-lucide="arrow-right"
                                    class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <p class="mt-3 text-xs text-slate-500 font-mono">Disponível nos planos Pro e Enterprise.</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- "Bento Grid" Features Section -->
        <section id="features" class="bg-slate-50 py-32 relative z-20">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">

                <div class="text-center mb-24">
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Um Sistema. <span
                            class="text-[#0c46e6]">Infinitas Possibilidades.</span></h2>
                    <p class="text-lg text-slate-500 max-w-2xl mx-auto">Tudo o que uma escola moderna precisa, embalado
                        em uma experiência que os pais amam.</p>
                </div>

                <div
                    class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-6 lg:gap-8 auto-rows-[minmax(180px,auto)]">

                    <!-- Feature 1: Communication (Big Card) -->
                    <div
                        class="col-span-1 md:col-span-6 lg:col-span-7 bg-white rounded-[2.5rem] p-6 md:p-10 shadow-[0_2px_40px_-12px_rgba(0,0,0,0.06)] border border-slate-100 relative overflow-hidden group hover:shadow-xl transition-all duration-500">
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-[#0c46e6] mb-4 md:mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="message-square-heart" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 md:mb-3">Comunicação que Aproxima</h3>
                            <p class="text-slate-500 leading-relaxed max-w-md">Chat direto, seguro e organizado. Chega
                                de grupos de WhatsApp bagunçados. A escola no controle da narrativa.</p>
                        </div>
                        <!-- UI decoration -->
                        <div
                            class="absolute right-[-20px] bottom-[-20px] w-64 h-64 bg-gradient-to-br from-blue-50 to-transparent rounded-full opacity-50 group-hover:scale-110 transition-transform duration-700">
                        </div>

                        <!-- Dynamic Communication Feed -->
                        <div id="comm-feed" class="absolute inset-0 flex flex-col justify-end pointer-events-none pb-0">
                            <!-- JS Injected -->
                        </div>
                    </div>

                    <!-- Feature 2: Financial (Tall Card) -->
                    <div
                        class="col-span-1 md:col-span-6 lg:col-span-5 bg-[#0c46e6] text-white rounded-[2.5rem] p-10 shadow-[0_20px_40px_-12px_rgba(12,70,230,0.4)] relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500">
                        <div class="relative z-10 h-full flex flex-col justify-between">
                            <div>
                                <div
                                    class="w-14 h-14 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-6 border border-white/20">
                                    <i data-lucide="wallet" class="w-7 h-7"></i>
                                </div>
                                <h3 class="text-2xl font-bold mb-3">Inadimplência Zero</h3>
                                <p class="text-blue-100 leading-relaxed">Boletos automáticos e lembretes gentis que
                                    funcionam.</p>
                            </div>

                            <!-- Mini Graph Mockup (Animated) -->
                            <div class="mt-8 flex items-end gap-2 h-24 opacity-80">
                                <div class="w-8 bg-white/20 rounded-t-lg animate-chart-height"
                                    style="--base-h: 40%; animation-delay: 0.2s;"></div>
                                <div class="w-8 bg-white/20 rounded-t-lg animate-chart-height"
                                    style="--base-h: 60%; animation-delay: 0.5s;"></div>
                                <div class="w-8 bg-white/20 rounded-t-lg animate-chart-height"
                                    style="--base-h: 30%; animation-delay: 0.1s;"></div>
                                <div class="w-8 bg-white rounded-t-lg shadow-lg relative animate-chart-height"
                                    style="--base-h: 85%; animation-delay: 0.8s;">
                                    <div
                                        class="absolute -top-8 left-1/2 -translate-x-1/2 bg-white text-[#0c46e6] text-[10px] font-bold px-2 py-1 rounded-full whitespace-nowrap">
                                        +40%</div>
                                </div>
                                <div class="w-8 bg-white/20 rounded-t-lg animate-chart-height"
                                    style="--base-h: 55%; animation-delay: 0.4s;"></div>
                            </div>
                        </div>
                        <!-- Noise overlay (Local SVG for better reliability) -->
                        <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-[url('data:image/svg+xml,%3Csvg viewBox=\"
                            0 0 200 200\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cfilter id=\"n\"%3E%3CfeTurbulence
                            type=\"fractalNoise\" baseFrequency=\"0.65\" numOctaves=\"3\"
                            stitchTiles=\"stitch\"/%3E%3C/filter%3E%3Crect width=\"100%25\" height=\"100%25\"
                            filter=\"url(%23n)\"/%3E%3C/svg%3E')]">
                        </div>
                    </div>

                    <!-- Feature 3: Academic (Square) -->
                    <div
                        class="col-span-1 md:col-span-3 lg:col-span-4 bg-white rounded-[2.5rem] p-8 shadow-[0_2px_40px_-12px_rgba(0,0,0,0.06)] border border-slate-100 hover:border-blue-200 transition-colors duration-300">
                        <div
                            class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 mb-6">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Pedagógico</h3>
                        <p class="text-sm text-slate-500">Diário de classe digital, notas e frequências em tempo real.
                        </p>
                    </div>

                    <!-- Feature 4: Security (Square) -->
                    <div
                        class="col-span-1 md:col-span-3 lg:col-span-4 bg-white rounded-[2.5rem] p-8 shadow-[0_2px_40px_-12px_rgba(0,0,0,0.06)] border border-slate-100 hover:border-blue-200 transition-colors duration-300">
                        <div
                            class="w-12 h-12 bg-orange-50 rounded-2xl flex items-center justify-center text-orange-600 mb-6">
                            <i data-lucide="shield-check" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Segurança Pura</h3>
                        <p class="text-sm text-slate-500">Controle de portaria com QR Code e autorizações digitais.</p>
                    </div>

                    <!-- Feature 5: Timeline (Wide) -->
                    <div
                        class="col-span-1 md:col-span-6 lg:col-span-4 bg-slate-900 rounded-[2.5rem] p-8 shadow-xl text-white relative overflow-hidden group">
                        <div class="relative z-10 h-full flex flex-col">
                            <h3 class="text-lg font-bold mb-1 text-slate-200 uppercase tracking-widest text-[10px]">
                                Timeline</h3>
                            <p class="text-2xl font-bold mb-6">O Dia a Dia, Gravado.</p>

                            <!-- Dynamic Timeline Feed (Fixed Height to prevent jitter) -->
                            <div id="timeline-feed"
                                class="flex flex-col gap-4 relative h-[160px] overflow-hidden mask-linear-fade">
                                <!-- JS Injected -->
                            </div>
                        </div>
                        <div
                            class="absolute right-0 bottom-0 w-32 h-32 bg-gradient-to-tl from-[#00d2ff]/20 to-transparent rounded-tl-[100px]">
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Deep Dive Section (Zig-Zag) -->
        <section id="solutions" class="py-32 bg-white relative z-20 overflow-hidden">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-24">
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">O Poder <span
                            class="text-[#0c46e6]">Real</span> da Tecnologia.</h2>
                    <p class="text-lg text-slate-500 max-w-2xl mx-auto">Não é apenas sobre digitizar. É sobre
                        transformar a experiência escolar em algo mágico.</p>
                </div>

                <!-- Pillar 1: Communication (Zig) -->
                <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">
                    <!-- Text -->
                    <div class="order-2 lg:order-1">
                        <div
                            class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-[#0c46e6] mb-6">
                            <i data-lucide="message-circle" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-slate-900 mb-4">Comunicação que Aproxima</h3>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            Esqueça os bilhetes perdidos na mochila. Crie um canal direto e seguro com as famílias.
                            Envie comunicados, fotos e autorizações com um clique.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Confirmação de leitura em tempo real</li>
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Segmentação por turmas ou alunos</li>
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Chat privado monitorado</li>
                        </ul>
                    </div>
                    <!-- Interactive Visual -->
                    <div class="order-1 lg:order-2 relative group">
                        <!-- Background Blob -->
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-blue-100 to-indigo-50 rounded-[3rem] transform rotate-3 scale-105 opacity-60">
                        </div>
                        <div class="relative bg-white border border-slate-100 p-8 rounded-[2.5rem] shadow-xl">
                            <!-- Message Bubble 1 -->
                            <div class="flex items-end justify-end mb-4">
                                <div
                                    class="bg-[#0c46e6] text-white px-5 py-3 rounded-2xl rounded-tr-none shadow-md max-w-[80%]">
                                    <p class="text-sm font-medium">Lembrete: Reunião pedagógica amanhã às 19h! 📅</p>
                                </div>
                                <div class="w-2 h-2 rounded-full bg-blue-200 ml-2 mb-2"></div>
                            </div>
                            <!-- Message Bubble 2 (Simula Resposta Mãe) -->
                            <div class="flex items-end justify-start mb-6">
                                <div
                                    class="w-8 h-8 rounded-full bg-pink-100 flex items-center justify-center text-pink-500 mr-3 text-xs font-bold border border-pink-200">
                                    M</div>
                                <div
                                    class="bg-slate-100 text-slate-700 px-5 py-3 rounded-2xl rounded-tl-none shadow-sm max-w-[80%] relative">
                                    <p class="text-sm font-medium">Combinado! Estaremos presentes.</p>
                                    <!-- Typing Indicator (Absolute floating) -->
                                    <div
                                        class="absolute -bottom-8 left-0 bg-white border border-slate-100 px-3 py-2 rounded-full shadow-lg flex items-center gap-1 animate-pulse">
                                        <div class="w-1.5 h-1.5 bg-slate-400 rounded-full animate-bounce"></div>
                                        <div class="w-1.5 h-1.5 bg-slate-400 rounded-full animate-bounce"
                                            style="animation-delay: 0.1s"></div>
                                        <div class="w-1.5 h-1.5 bg-slate-400 rounded-full animate-bounce"
                                            style="animation-delay: 0.2s"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Floating Status -->
                            <div
                                class="absolute top-4 right-6 bg-green-50 text-green-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border border-green-100 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> Online
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 2: Financial (Zag) -->
                <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">
                    <!-- Interactive Visual (Left on Desktop) -->
                    <div class="order-1 relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-bl from-green-50 to-emerald-50 rounded-[3rem] transform -rotate-2 scale-105 opacity-60">
                        </div>
                        <div
                            class="relative bg-white border border-slate-100 p-8 rounded-[2.5rem] shadow-xl flex flex-col items-center text-center overflow-hidden">
                            <!-- Bill Icon -->
                            <div
                                class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center text-slate-400 mb-4 group-hover:scale-110 transition-transform duration-500">
                                <i data-lucide="file-text" class="w-8 h-8"></i>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-1">Mensalidade - Março</h4>
                            <p class="text-lg font-bold text-slate-900 mb-6">R$ 1.250,00</p>

                            <!-- Pay Button Simulation -->
                            <div
                                class="w-full bg-[#0c46e6] text-white py-3 rounded-xl font-bold mb-4 shadow-lg shadow-blue-500/30 group-hover:shadow-blue-500/50 transition-all cursor-pointer relative overflow-hidden">
                                <span class="relative z-10">Pagar com Pix</span>
                                <div
                                    class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                </div>
                            </div>
                            <p class="text-xs text-slate-400">Processamento seguro e imediato.</p>

                            <!-- Stamp Animation Overlay -->
                            <div
                                class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                                <div
                                    class="bg-white/90 backdrop-blur-sm px-6 py-2 rounded-xl border-2 border-green-500 text-green-600 font-black text-2xl uppercase tracking-widest transform scale-150 rotate-[-12deg] group-hover:scale-100 transition-transform duration-500 shadow-2xl">
                                    PAGO ✅
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Text -->
                    <div class="order-2">
                        <div
                            class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 mb-6">
                            <i data-lucide="wallet" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-slate-900 mb-4">Financeiro Descomplicado</h3>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            Reduza a inadimplência com automação inteligente. Gere boletos, receba via Pix e concilie
                            pagamentos automaticamente. Tudo integrado.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Baixa automática de pagamentos</li>
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Lembretes de vencimento automáticos</li>
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Relatórios financeiros detalhados</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3: Pedagogical (Zig) -->
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Text -->
                    <div class="order-2 lg:order-1">
                        <div
                            class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 mb-6">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-slate-900 mb-4">Pedagógico Eficiente</h3>
                        <p class="text-slate-600 text-lg leading-relaxed mb-6">
                            Potencialize o aprendizado. Lance notas, controle frequências e gerencie conteúdos
                            curriculares sem burocracia. O foco volta a ser o aluno.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Diário de classe digital mobile</li>
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Boletins personalizáveis</li>
                            <li class="flex items-center gap-3 text-slate-600 font-medium"><i data-lucide="check"
                                    class="w-5 h-5 text-green-500"></i> Acompanhamento de desempenho visual</li>
                        </ul>
                    </div>
                    <!-- Interactive Visual -->
                    <div class="order-1 lg:order-2 relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-purple-50 to-pink-50 rounded-[3rem] transform rotate-2 scale-105 opacity-60">
                        </div>
                        <div
                            class="relative bg-white border border-slate-100 p-8 rounded-[2.5rem] shadow-xl flex flex-col gap-4">
                            <!-- Subject Header -->
                            <div class="flex justify-between items-center border-b border-slate-50 pb-4">
                                <div>
                                    <h4 class="font-bold text-slate-800">Matemática</h4>
                                    <p class="text-xs text-slate-400">3º Bimestre</p>
                                </div>
                                <div class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-xs font-bold">
                                    Aprovado</div>
                            </div>
                            <!-- Grade Slider Simulation -->
                            <div>
                                <div class="flex justify-between text-xs font-bold text-slate-500 mb-2">
                                    <span>Nota Final</span>
                                    <span class="text-purple-600 text-lg">9.5</span>
                                </div>
                                <div class="h-3 w-full bg-slate-100 rounded-full overflow-hidden">
                                    <div
                                        class="h-full bg-gradient-to-r from-purple-500 to-indigo-500 w-[0%] group-hover:w-[95%] transition-all duration-[1.5s] ease-out rounded-full">
                                    </div>
                                </div>
                            </div>
                            <!-- Attendance Grid -->
                            <div class="pt-2">
                                <p class="text-xs font-bold text-slate-500 mb-2">Frequência</p>
                                <div class="flex gap-1">
                                    <div
                                        class="h-8 flex-1 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <div
                                        class="h-8 flex-1 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <div
                                        class="h-8 flex-1 bg-green-100 rounded-lg flex items-center justify-center text-green-600">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <div
                                        class="h-8 flex-1 bg-green-100 rounded-lg flex items-center justify-center text-green-600 opacity-50 group-hover:opacity-100 transition-opacity delay-300">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="mt-24 text-center">
                    <a href="#contact"
                        class="inline-flex items-center gap-3 bg-[#0c46e6] text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-blue-700 hover:scale-105 hover:shadow-xl transition-all duration-300 shadow-lg shadow-blue-500/30 group">
                        Agendar Demonstração
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <p class="mt-4 text-sm text-slate-500 font-medium">Sem compromisso. Teste grátis por 7 dias.</p>
                </div>

            </div>

    </main>

    <!-- Typeform-Style Lead Capture Quiz -->
    <section id="contact" class="py-32 bg-slate-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-6xl pointer-events-none">
            <div class="absolute top-[10%] left-[10%] w-64 h-64 bg-blue-100 rounded-full blur-[80px] opacity-40"></div>
            <div class="absolute bottom-[10%] right-[10%] w-64 h-64 bg-purple-100 rounded-full blur-[80px] opacity-40">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="text-[#0c46e6] font-extrabold tracking-widest uppercase text-xs mb-3 block">Diagnóstico &
                    Solução</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">O Futuro da Sua Escola
                    Começa Aqui</h2>
                <p class="mt-4 text-slate-500 font-medium max-w-2xl mx-auto">Compare o cenário tradicional com a
                    evolução tecnológica da BluEduca e veja a diferença na prática.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Comparison Container (Mobile: First / Desktop: Sides) -->
                <div
                    class="lg:col-span-3 order-2 lg:order-1 flex flex-col opacity-80 lg:opacity-60 hover:opacity-100 transition-opacity duration-500 overflow-hidden max-h-[520px] relative">
                    <div
                        class="flex items-center gap-3 pb-4 mb-2 shrink-0 sticky top-0 bg-slate-50/90 backdrop-blur-sm z-10 border-b border-slate-200/50">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 shrink-0">
                            <i data-lucide="frown" class="w-5 h-5"></i>
                        </div>
                        <h4 class="font-extrabold text-slate-400 uppercase text-[10px] tracking-widest">Sem BluEduca
                        </h4>
                    </div>

                    <div class="flex flex-col gap-4 animate-marquee">
                        <!-- Chaos Cards Set 1 -->
                        <div class="flex flex-col gap-4">
                            <!-- Chaos Card 1 -->
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale hover:grayscale-0 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="file-warning" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Inadimplência Oculta</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Cobranças manuais sem controle
                                        real.</p>
                                </div>
                            </div>
                            <!-- Chaos Card 2 -->
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale hover:grayscale-0 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="clock" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Burocracia Lenta</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Horas perdidas com planilhas e
                                        papéis.</p>
                                </div>
                            </div>
                            <!-- Chaos Card 3 -->
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale hover:grayscale-0 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="message-square-off" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Vácuo de Mensagens</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Recados perdidos e pais
                                        desinformados.</p>
                                </div>
                            </div>
                            <!-- Chaos Card 4 -->
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale hover:grayscale-0 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="shield-off" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Dados em Risco</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Vulnerabilidade a perdas e
                                        ataques.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate for Seamless Marquee -->
                        <div class="flex flex-col gap-4">
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="file-warning" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Inadimplência Oculta</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Cobranças manuais sem controle
                                        real.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="clock" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Burocracia Lenta</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Horas perdidas com planilhas e
                                        papéis.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="message-square-off" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Vácuo de Mensagens</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Recados perdidos e pais
                                        desinformados.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white/40 border border-slate-200 p-4 rounded-2xl flex gap-3 items-start grayscale">
                                <div
                                    class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center text-red-400 shrink-0">
                                    <i data-lucide="shield-off" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-600 mb-0.5">Dados em Risco</p>
                                    <p class="text-[9px] text-slate-400 leading-tight">Vulnerabilidade a perdas e
                                        ataques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center: The Quiz (The Gateway) -->
                <div class="lg:col-span-6 order-1 lg:order-2">

                    <!-- Progress Bar -->
                    <div class="w-full bg-slate-200 h-2 rounded-full mb-12 overflow-hidden shadow-inner p-0.5">
                        <div id="quiz-progress"
                            class="h-full bg-gradient-to-r from-[#0c46e6] to-[#00d2ff] w-[10%] transition-all duration-700 ease-out rounded-full shadow-[0_0_10px_rgba(12,70,230,0.5)]">
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-[2rem] md:rounded-[2.5rem] shadow-2xl p-6 md:p-14 relative min-h-[450px] md:min-h-[520px] flex items-center justify-center text-center overflow-hidden">

                        <!-- Step 1: Intro / Challenge -->
                        <div id="step-1"
                            class="w-full transition-all duration-500 transform translate-x-0 opacity-100 absolute inset-0 p-8 md:p-12 flex flex-col justify-center">
                            <span
                                class="text-[#0c46e6] font-bold tracking-wider uppercase text-[10px] md:text-xs mb-3 md:mb-4">Passo
                                1 de
                                3</span>
                            <h3 class="text-xl md:text-3xl font-extrabold text-slate-900 mb-6 md:mb-8 leading-tight">
                                Qual o maior desafio
                                da sua
                                gestão hoje?</h3>
                            <div class="flex flex-col gap-4">
                                <button onclick="nextStep(2, 'Inadimplência')"
                                    class="w-full py-3 md:py-4 px-4 md:px-6 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-xl text-slate-600 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all text-left flex items-center justify-between group quiz-option">
                                    <div class="flex items-center gap-3 md:gap-4">
                                        <div
                                            class="w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl bg-slate-50 flex items-center justify-center group-hover:bg-blue-50 text-slate-400 group-hover:text-[#0c46e6] transition-all quiz-icon">
                                            <i data-lucide="banknote" class="w-5 h-5 md:w-6 md:h-6"></i>
                                        </div>
                                        <span>Inadimplência Alta</span>
                                    </div>
                                    <i data-lucide="chevron-right"
                                        class="w-4 h-4 md:w-5 md:h-5 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                </button>
                                <button onclick="nextStep(2, 'Comunicação')"
                                    class="w-full py-3 md:py-4 px-4 md:px-6 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-xl text-slate-600 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all text-left flex items-center justify-between group quiz-option">
                                    <div class="flex items-center gap-3 md:gap-4">
                                        <div
                                            class="w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl bg-slate-50 flex items-center justify-center group-hover:bg-blue-50 text-slate-400 group-hover:text-[#0c46e6] transition-all quiz-icon">
                                            <i data-lucide="message-square" class="w-5 h-5 md:w-6 md:h-6"></i>
                                        </div>
                                        <span>Comunicação com Pais</span>
                                    </div>
                                    <i data-lucide="chevron-right"
                                        class="w-4 h-4 md:w-5 md:h-5 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                </button>
                                <button onclick="nextStep(2, 'Burocracia')"
                                    class="w-full py-3 md:py-4 px-4 md:px-6 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-xl text-slate-600 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all text-left flex items-center justify-between group quiz-option">
                                    <div class="flex items-center gap-3 md:gap-4">
                                        <div
                                            class="w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl bg-slate-50 flex items-center justify-center group-hover:bg-blue-50 text-slate-400 group-hover:text-[#0c46e6] transition-all quiz-icon">
                                            <i data-lucide="briefcase" class="w-5 h-5 md:w-6 md:h-6"></i>
                                        </div>
                                        <span>Burocracia Pedagógica</span>
                                    </div>
                                    <i data-lucide="chevron-right"
                                        class="w-4 h-4 md:w-5 md:h-5 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Step 2: Size -->
                        <div id="step-2"
                            class="w-full transition-all duration-500 transform translate-x-full opacity-0 pointer-events-none absolute inset-0 p-8 md:p-12 flex flex-col justify-center">
                            <button onclick="prevStep(1)"
                                class="absolute top-6 left-6 md:top-8 md:left-8 text-slate-400 hover:text-slate-600 transition-colors"><i
                                    data-lucide="arrow-left" class="w-5 h-5 md:w-6 md:h-6"></i></button>

                            <span
                                class="text-[#0c46e6] font-bold tracking-wider uppercase text-[10px] md:text-xs mb-3 md:mb-4">Passo
                                2 de
                                3</span>
                            <h3 class="text-xl md:text-3xl font-extrabold text-slate-900 mb-6 md:mb-8 leading-tight">
                                Quantos alunos a
                                escola
                                possui?</h3>
                            <div class="grid grid-cols-2 gap-3 md:gap-4">
                                <button onclick="nextStep(3, '0-100')"
                                    class="py-4 md:py-6 px-3 md:px-4 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-lg text-slate-500 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all flex flex-col items-center gap-1 md:gap-2 group">
                                    <span
                                        class="text-xl md:text-2xl group-hover:scale-110 transition-transform">🐣</span>
                                    0 - 100
                                </button>
                                <button onclick="nextStep(3, '100-300')"
                                    class="py-4 md:py-6 px-3 md:px-4 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-lg text-slate-500 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all flex flex-col items-center gap-1 md:gap-2 group">
                                    <span
                                        class="text-xl md:text-2xl group-hover:scale-110 transition-transform">🚀</span>
                                    100 - 300
                                </button>
                                <button onclick="nextStep(3, '300-500')"
                                    class="py-4 md:py-6 px-3 md:px-4 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-lg text-slate-500 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all flex flex-col items-center gap-1 md:gap-2 group">
                                    <span
                                        class="text-xl md:text-2xl group-hover:scale-110 transition-transform">🏰</span>
                                    300 - 500
                                </button>
                                <button onclick="nextStep(3, '500+')"
                                    class="py-4 md:py-6 px-3 md:px-4 rounded-xl md:rounded-2xl border-2 border-slate-100 hover:border-[#0c46e6] hover:bg-white hover:shadow-lg text-slate-500 hover:text-[#0c46e6] font-bold text-sm md:text-lg transition-all flex flex-col items-center gap-1 md:gap-2 group">
                                    <span
                                        class="text-xl md:text-2xl group-hover:scale-110 transition-transform">🌍</span>
                                    500+
                                </button>
                            </div>
                        </div>

                        <div id="step-3"
                            class="w-full transition-all duration-500 transform translate-x-full opacity-0 pointer-events-none absolute inset-0 p-8 md:p-12 flex flex-col justify-center">
                            <button onclick="prevStep(2)"
                                class="absolute top-6 left-6 md:top-8 md:left-8 text-slate-400 hover:text-slate-600 transition-colors"><i
                                    data-lucide="arrow-left" class="w-5 h-5 md:w-6 md:h-6"></i></button>

                            <span
                                class="text-[#0c46e6] font-bold tracking-wider uppercase text-[10px] md:text-xs mb-3 md:mb-4">Passo
                                Final</span>
                            <h3 class="text-xl md:text-3xl font-extrabold text-slate-900 mb-4 md:mb-6 leading-tight">
                                Vamos revolucionar sua
                                escola.
                            </h3>
                            <p class="text-xs md:text-base text-slate-500 mb-6 md:mb-8 text-center">Deixe seu contato
                                para agendarmos uma demo exclusiva.</p>

                            <form onsubmit="submitQuiz(event)" class="flex flex-col gap-5 text-left">
                                <div class="relative group/input">
                                    <label
                                        class="block text-[10px] font-bold text-[#0c46e6] uppercase mb-1.5 ml-1 tracking-widest">Seu
                                        Nome</label>
                                    <div class="relative">
                                        <i data-lucide="user"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 md:w-5 md:h-5 text-slate-400 group-focus-within/input:text-[#0c46e6] transition-colors"></i>
                                        <input type="text" required
                                            class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl md:rounded-2xl pl-10 md:pl-12 pr-4 py-3 md:py-4 focus:outline-none focus:border-[#0c46e6] focus:bg-white focus:shadow-lg transition-all text-sm md:text-base text-slate-800 font-medium placeholder:text-slate-300"
                                            placeholder="Ex: Ana Silva">
                                    </div>
                                </div>
                                <div class="relative group/input">
                                    <label
                                        class="block text-[9px] md:text-[10px] font-bold text-[#0c46e6] uppercase mb-1 md:mb-1.5 ml-1 tracking-widest">WhatsApp
                                        / Celular</label>
                                    <div class="relative">
                                        <i data-lucide="phone"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 md:w-5 md:h-5 text-slate-400 group-focus-within/input:text-[#0c46e6] transition-colors"></i>
                                        <input type="tel" required
                                            class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl md:rounded-2xl pl-10 md:pl-12 pr-4 py-3 md:py-4 focus:outline-none focus:border-[#0c46e6] focus:bg-white focus:shadow-lg transition-all text-sm md:text-base text-slate-800 font-medium placeholder:text-slate-300"
                                            placeholder="(11) 99999-9999">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-[#0c46e6] to-[#00d2ff] text-white font-extrabold py-4 md:py-5 rounded-xl md:rounded-2xl shadow-xl shadow-blue-500/30 hover:scale-[1.02] active:scale-[0.98] transition-all mt-2 md:mt-4 flex items-center justify-center gap-2 md:gap-3 group">
                                    <span class="text-sm md:text-base">Agendar Minha Demo</span>
                                    <i data-lucide="check"
                                        class="w-5 h-5 md:w-6 md:h-6 group-hover:scale-110 transition-transform"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Step 4: Success -->
                        <div id="step-success"
                            class="w-full transition-all duration-500 transform translate-x-full opacity-0 pointer-events-none absolute inset-0 p-12 flex flex-col justify-center items-center text-center">
                            <div class="relative">
                                <div class="absolute inset-0 bg-green-400 blur-2xl opacity-20 animate-pulse"></div>
                                <div
                                    class="relative w-24 h-24 bg-gradient-to-br from-green-400 to-emerald-600 rounded-3xl flex items-center justify-center text-white mb-8 shadow-xl shadow-green-500/20 rotate-12 hover:rotate-0 transition-transform duration-500">
                                    <i data-lucide="party-popper" class="w-12 h-12"></i>
                                </div>
                            </div>
                            <h3 class="text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">Quase lá! 🚀</h3>
                            <p class="text-slate-500 text-lg mb-8 leading-relaxed max-w-sm">Nossa equipe já foi
                                notificada e
                                vamos te chamar em instantes para transformar sua escola.</p>
                            <button onclick="resetQuiz()"
                                class="px-8 py-3 bg-slate-100 text-slate-600 rounded-full font-bold text-sm hover:bg-slate-200 transition-all">Voltar
                                ao início</button>
                        </div>

                    </div>

                    <p
                        class="text-center text-slate-400 text-[10px] mt-8 flex items-center justify-center gap-2 opacity-60 uppercase font-bold tracking-widest">
                        <i data-lucide="lock" class="w-3 h-3"></i> Seus dados estão protegidos por criptografia de ponta
                        a ponta.
                    </p>
                </div>

                <!-- Right Side: The Evolution (Com BluEduca) -->
                <div
                    class="lg:col-span-3 order-3 flex flex-col opacity-100 transition-opacity duration-500 overflow-hidden max-h-[520px] relative">
                    <div
                        class="flex flex-col gap-2 pb-4 mb-2 justify-end lg:justify-start shrink-0 sticky top-0 bg-slate-50/90 backdrop-blur-sm z-10 border-b border-blue-200/30">
                        <div class="flex items-center gap-3">
                            <h4 class="font-extrabold text-[#0c46e6] uppercase text-[10px] tracking-widest">Com BluEduca
                            </h4>
                            <div
                                class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-[#0c46e6] shadow-lg shadow-blue-500/20 shrink-0">
                                <i data-lucide="sparkles" class="w-5 h-5"></i>
                            </div>
                        </div>
                        <img src="assets/img/logo_completo.png" alt="BluEduca"
                            class="h-8 lg:h-10 object-contain ml-0 lg:-ml-1 opacity-90">
                    </div>

                    <div class="flex flex-col gap-4 animate-marquee" style="animation-direction: reverse;">
                        <!-- Evolution Cards Set 1 -->
                        <div class="flex flex-col gap-4">
                            <!-- Evolution Card 1 -->
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start hover:scale-105 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="trending-down" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Inadimplência Zero</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Régua de cobrança automática via
                                        WhatsApp.</p>
                                </div>
                            </div>
                            <!-- Evolution Card 2 -->
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start hover:scale-105 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="zap" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Automação Inteligente</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Tudo resolvido em segundos. Zero
                                        esforço.</p>
                                </div>
                            </div>
                            <!-- Evolution Card 3 -->
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start hover:scale-105 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="heart" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Fidelização de Pais</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Engajamento real e feedback
                                        constante.</p>
                                </div>
                            </div>
                            <!-- Evolution Card 4 -->
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start hover:scale-105 transition-all">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="shield-check" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Segurança Total</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Dados protegidos por criptografia
                                        militar.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate for Seamless Marquee -->
                        <div class="flex flex-col gap-4">
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="trending-down" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Inadimplência Zero</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Régua de cobrança automática via
                                        WhatsApp.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="zap" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Automação Inteligente</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Tudo resolvido em segundos. Zero
                                        esforço.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="heart" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Fidelização de Pais</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Engajamento real e feedback
                                        constante.</p>
                                </div>
                            </div>
                            <div
                                class="bg-white border border-blue-100 p-4 rounded-2xl shadow-xl shadow-blue-500/5 flex gap-3 items-start">
                                <div
                                    class="w-7 h-7 rounded-lg bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                                    <i data-lucide="shield-check" class="w-4 h-4"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[11px] font-bold text-slate-800 mb-0.5">Segurança Total</p>
                                    <p class="text-[9px] text-slate-500 leading-tight">Dados protegidos por criptografia
                                        militar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section: FAQ (Objection Killer) -->
    <section class="py-32 bg-white relative z-20 border-t border-slate-100">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-6 tracking-tight">Dúvidas Frequentes
                </h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">Tudo o que você precisa saber antes de começar.</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 (Kept) -->
                <div x-data="{ open: false }"
                    class="border border-slate-200 rounded-3xl overflow-hidden transition-all duration-300"
                    :class="open ? 'bg-slate-50 shadow-lg' : 'bg-white'">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-6 md:p-8 text-left">
                        <span class="font-bold text-lg text-slate-900">Preciso instalar algum programa?</span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center transition-transform duration-300"
                            :class="open ? 'rotate-180 text-blue-600' : 'text-slate-400'">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div x-show="open" x-collapse style="display: none;">
                        <div class="p-6 md:p-8 pt-0 text-slate-600 leading-relaxed">
                            Não! O BluEduca é 100% em nuvem. Você acessa pelo navegador ou pelo nosso aplicativo, de
                            qualquer lugar, a qualquer hora. Seus dados ficam salvos em servidores seguros (os mesmos
                            usados pela Amazon).
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 (New) -->
                <div x-data="{ open: false }"
                    class="border border-slate-200 rounded-3xl overflow-hidden transition-all duration-300"
                    :class="open ? 'bg-slate-50 shadow-lg' : 'bg-white'">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-6 md:p-8 text-left">
                        <span class="font-bold text-lg text-slate-900">Vocês oferecem suporte e treinamento?</span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center transition-transform duration-300"
                            :class="open ? 'rotate-180 text-blue-600' : 'text-slate-400'">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div x-show="open" x-collapse style="display: none;">
                        <div class="p-6 md:p-8 pt-0 text-slate-600 leading-relaxed">
                            Sim! Nossa equipe acompanha sua escola desde a implantação até o dia a dia, com treinamentos
                            ilimitados para professores e secretaria. Você nunca estará sozinho.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 (New) -->
                <div x-data="{ open: false }"
                    class="border border-slate-200 rounded-3xl overflow-hidden transition-all duration-300"
                    :class="open ? 'bg-slate-50 shadow-lg' : 'bg-white'">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-6 md:p-8 text-left">
                        <span class="font-bold text-lg text-slate-900">Meus dados estão seguros?</span>
                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center transition-transform duration-300"
                            :class="open ? 'rotate-180 text-blue-600' : 'text-slate-400'">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div x-show="open" x-collapse style="display: none;">
                        <div class="p-6 md:p-8 pt-0 text-slate-600 leading-relaxed">
                            Segurança total. Utilizamos criptografia de ponta a ponta e seguimos rigorosamente a LGPD.
                            Seus dados são seus e de mais ninguém. Realizamos backups diários automáticos.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section: Testimonials (Who loves, uses) -->
    <?php include 'includes/footer.php'; ?>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/5511987253394" target="_blank"
        class="fixed bottom-8 right-8 z-[60] bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-all duration-300 animate-whatsapp group flex items-center gap-3">
        <i data-lucide="message-circle" class="w-6 h-6 fill-current"></i>
        <span
            class="max-w-0 overflow-hidden group-hover:max-w-xs transition-all duration-500 whitespace-nowrap font-bold text-sm">Falar
            no WhatsApp</span>
    </a>

    <!-- LGPD Cookie Banner -->
    <div x-data="{ 
            show: false, 
            settings: false,
            prefs: {
                essential: true,
                analytics: true,
                marketing: false
            },
            init() { 
                if (!localStorage.getItem('lgpd_consent')) {
                    setTimeout(() => { this.show = true }, 2000); 
                }
            },
            save(type) {
                const consent = type === 'all' 
                    ? { essential: true, analytics: true, marketing: true } 
                    : this.prefs;
                localStorage.setItem('lgpd_consent', JSON.stringify(consent));
                this.show = false;
            }
         }" x-show="show" x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="translate-y-full opacity-0"
        class="fixed bottom-6 left-6 right-6 md:right-auto md:left-8 md:max-w-md z-[100]" x-cloak>

        <div class="glass-os p-5 md:p-6 rounded-[2.5rem] shadow-2xl border border-white/40 flex flex-col gap-5 overflow-hidden transition-all duration-500"
            :class="settings ? 'max-h-[600px]' : 'max-h-[350px]'">

            <!-- Main View -->
            <div x-show="!settings" x-transition.opacity>
                <div class="flex items-start gap-4 mb-6">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-[#0c46e6] shrink-0">
                        <i data-lucide="cookie" class="w-6 h-6"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-extrabold text-slate-900 mb-1">Privacidade & Cookies</h4>
                        <p class="text-[11px] text-slate-500 leading-relaxed">
                            Respeitamos sua privacidade. Usamos cookies para melhorar sua experiência e analisar nosso
                            tráfego. Leia nossa <a href="privacidade"
                                class="text-[#0c46e6] font-bold hover:underline">Política de
                                Privacidade</a>.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <button @click="save('all')"
                        class="w-full bg-[#0c46e6] text-white text-xs font-bold py-3.5 rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/20">
                        Aceitar Tudo
                    </button>
                    <button @click="settings = true"
                        class="w-full text-xs font-bold text-slate-600 hover:bg-slate-100 py-3 rounded-xl transition-all">
                        Preferências
                    </button>
                </div>
            </div>

            <!-- Settings View -->
            <div x-show="settings" x-transition.opacity class="flex flex-col gap-4">
                <div class="flex items-center justify-between mb-2">
                    <h4 class="text-sm font-extrabold text-slate-900">Configurações</h4>
                    <button @click="settings = false" class="text-slate-400 hover:text-slate-600">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- Category 1 -->
                <div class="flex items-center justify-between p-3 bg-slate-50/50 rounded-2xl border border-slate-100">
                    <div class="flex-1 pr-4">
                        <p class="text-xs font-bold text-slate-800 mb-0.5">Essenciais</p>
                        <p class="text-[10px] text-slate-500 leading-tight">Necessários para o site funcionar.</p>
                    </div>
                    <div class="w-10 h-6 bg-[#0c46e6]/20 rounded-full relative cursor-not-allowed">
                        <div class="absolute right-1 top-1 w-4 h-4 bg-[#0c46e6] rounded-full"></div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div @click="prefs.analytics = !prefs.analytics"
                    class="flex items-center justify-between p-3 bg-white/50 rounded-2xl border border-slate-100 cursor-pointer hover:border-blue-200 transition-all">
                    <div class="flex-1 pr-4">
                        <p class="text-xs font-bold text-slate-800 mb-0.5">Analytics</p>
                        <p class="text-[10px] text-slate-500 leading-tight">Melhorias baseadas no seu uso.</p>
                    </div>
                    <div class="w-10 h-6 rounded-full relative transition-colors duration-300"
                        :class="prefs.analytics ? 'bg-[#0c46e6]' : 'bg-slate-200'">
                        <div class="absolute top-1 w-4 h-4 bg-white rounded-full transition-all duration-300"
                            :class="prefs.analytics ? 'left-5' : 'left-1'"></div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div @click="prefs.marketing = !prefs.marketing"
                    class="flex items-center justify-between p-3 bg-white/50 rounded-2xl border border-slate-100 cursor-pointer hover:border-blue-200 transition-all">
                    <div class="flex-1 pr-4">
                        <p class="text-xs font-bold text-slate-800 mb-0.5">Marketing</p>
                        <p class="text-[10px] text-slate-500 leading-tight">Anúncios e redes sociais.</p>
                    </div>
                    <div class="w-10 h-6 rounded-full relative transition-colors duration-300"
                        :class="prefs.marketing ? 'bg-[#0c46e6]' : 'bg-slate-200'">
                        <div class="absolute top-1 w-4 h-4 bg-white rounded-full transition-all duration-300"
                            :class="prefs.marketing ? 'left-5' : 'left-1'"></div>
                    </div>
                </div>

                <button @click="save('custom')"
                    class="w-full bg-slate-900 text-white text-xs font-bold py-3.5 rounded-xl hover:bg-slate-800 transition-all mt-2">
                    Salvar Preferências
                </button>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();

        // Dynamic Notification Logic
        const feedContainer = document.getElementById('notification-feed');
        const notifications = [
            {
                icon: 'message-circle',
                iconColor: 'text-blue-500',
                bg: 'bg-blue-100',
                title: 'Coordenação',
                time: 'Agora',
                desc: 'Reunião de pais confirmada para sexta.',
                type: 'chat'
            },
            {
                icon: 'check-circle',
                iconColor: 'text-green-500',
                bg: 'bg-green-100',
                title: 'Financeiro',
                time: '2min',
                desc: 'Mensalidade de Março Confirmada!',
                type: 'success'
            },
            {
                icon: 'calendar',
                iconColor: 'text-purple-500',
                bg: 'bg-purple-100',
                title: 'Novo Evento',
                time: '15min',
                desc: 'Feira de Ciências: 25/08',
                type: 'event'
            },
            {
                icon: 'book-open',
                iconColor: 'text-amber-500',
                bg: 'bg-amber-100',
                title: 'Tarefa de Casa',
                time: '30min',
                desc: 'Matemática: Pág 45 a 50.',
                type: 'task'
            }
        ];

        let index = 0;

        function createCard(data) {
            const el = document.createElement('div');
            el.className = 'glass-os p-4 rounded-2xl flex items-start gap-3 transform translate-y-10 opacity-0 transition-all duration-700 ease-out shadow-lg mb-2';
            el.innerHTML = `
                <div class="w-10 h-10 rounded-full ${data.bg} flex items-center justify-center ${data.iconColor} shrink-0">
                    <i data-lucide="${data.icon}" class="w-5 h-5"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex justify-between items-center w-full mb-0.5">
                        <span class="text-xs font-bold text-slate-900">${data.title}</span>
                        <span class="text-[10px] text-slate-400">${data.time}</span>
                    </div>
                    <p class="text-[11px] text-slate-600 leading-snug truncate">${data.desc}</p>
                </div>
            `;
            return el;
        }

        function spawnNotification() {
            const data = notifications[index];
            const card = createCard(data);

            // Allow Lucide to process the new icon
            feedContainer.appendChild(card);
            lucide.createIcons();

            // Animate In (Next Frame)
            requestAnimationFrame(() => {
                card.classList.remove('translate-y-10', 'opacity-0');
            });

            // Animate Out
            setTimeout(() => {
                card.classList.add('-translate-y-10', 'opacity-0', 'scale-95'); // Move up and fade out
                setTimeout(() => {
                    if (card.parentNode) feedContainer.removeChild(card);
                }, 700); // Wait for transition to finish
            }, 4000); // Stay visible for 4s

            index = (index + 1) % notifications.length;
        }

        // Start Loop
        setTimeout(() => {
            spawnNotification();
            setInterval(spawnNotification, 2500); // New card every 2.5s
        }, 1000);

        // --- Bento Grid Animations ---

        // 1. Communication Feed Logic (Enhanced Glass)
        const commFeed = document.getElementById('comm-feed');
        const commMessages = [
            { name: 'Mãe do Pedro', msg: 'Adorei as fotos de hoje! 😍', time: 'Agora', img: 'https://ui-avatars.com/api/?name=M&background=f0f9ff&color=0c46e6' },
            { name: 'Secretaria', msg: 'Documento pendente enviado.', time: '5min', img: 'https://ui-avatars.com/api/?name=S&background=fefce8&color=d97706' },
            { name: 'Prof. Ana', msg: 'Joãozinho participou super bem!', time: '12min', img: 'https://ui-avatars.com/api/?name=A&background=f0fdf4&color=16a34a' },
            { name: 'Pai da Julia', msg: 'Chegando para buscar.', time: '15min', img: 'https://ui-avatars.com/api/?name=P&background=fdf4ff&color=9333ea' }
        ];
        let commIndex = 0;

        function spawnCommCard() {
            const data = commMessages[commIndex];
            const el = document.createElement('div');

            // Responsive: Top-right on mobile, Bottom-right on desktop
            el.className = 'absolute top-4 right-4 md:top-auto md:bottom-6 md:right-6 w-[75%] md:w-80 p-3 md:p-5 rounded-2xl md:rounded-3xl shadow-lg transform translate-y-12 opacity-0 transition-all duration-700 border border-white/60 bg-white/40 backdrop-blur-xl z-20';

            el.innerHTML = `
                <div class="flex items-center md:items-start gap-2 md:gap-4">
                    <img src="${data.img}" class="w-8 h-8 md:w-10 md:h-10 rounded-full shadow-sm border border-white/50" alt="${data.name}">
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-0.5 md:mb-1">
                            <div class="text-[11px] md:text-sm font-bold text-slate-800 truncate">${data.name}</div>
                            <div class="text-[9px] md:text-[10px] text-slate-500 font-medium shrink-0">${data.time}</div>
                        </div>
                        <p class="text-[10px] md:text-xs text-slate-700 leading-tight md:leading-relaxed font-medium line-clamp-2">"${data.msg}"</p>
                    </div>
                </div>
             `;

            commFeed.appendChild(el);

            // Animate In
            requestAnimationFrame(() => {
                el.classList.remove('translate-y-12', 'opacity-0');
            });

            // Animate Out
            setTimeout(() => {
                el.classList.add('-translate-y-12', 'opacity-0', 'scale-95'); // Move UP and fade
                setTimeout(() => { if (el.parentNode) commFeed.removeChild(el); }, 700);
            }, 3200);

            commIndex = (commIndex + 1) % commMessages.length;
        }

        // 2. Timeline Feed Logic (Fluid Transitions)
        const timelineFeed = document.getElementById('timeline-feed');
        // Initial State
        const timelineData = [
            { time: '07:30', title: 'Entrada', active: false },
            { time: '08:00', title: 'Café da manhã', active: true },
            { time: '09:00', title: 'Roda de Leitura', active: false },
            { time: '10:00', title: 'Parquinho', active: false },
            { time: '11:30', title: 'Almoço', active: false }
        ];

        let timelineActiveIndex = 1;

        function initTimeline() {
            timelineFeed.innerHTML = '';
            timelineData.slice(0, 3).forEach((item, i) => { // Show 3 items initially
                const row = createTimelineRow(item);
                row.id = `tl-row-${i}`;
                timelineFeed.appendChild(row);
            });
        }

        function createTimelineRow(item) {
            const row = document.createElement('div');
            // Clean Look: No BG, No Border, No Shadow. Just position/scale.
            row.className = `flex items-center gap-2 p-3 rounded-2xl transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] ${item.active ? 'translate-x-4 scale-105' : 'opacity-40'}`;

            const dotClass = item.active
                ? 'w-3 h-3 rounded-full bg-[#00d2ff] shadow-[0_0_15px_#00d2ff] scale-100'
                : 'w-2 h-2 rounded-full bg-slate-600';

            const textClass = item.active
                ? 'text-sm font-bold text-white tracking-wide'
                : 'text-xs text-slate-400 font-medium';

            row.innerHTML = `
                <div class="${dotClass} transition-all duration-700"></div>
                <div class="${textClass} transition-all duration-700">${item.time} • ${item.title}</div>
            `;
            return row;
        }

        function rotateTimeline() {
            // Logic: 
            // 1. Remove top item (fade out & slide up)
            // 2. Shift active state (middle becomes top, bottom becomes middle/active)
            // 3. Add new item at bottom (fade in & slide up)

            const first = timelineFeed.firstElementChild;
            if (!first) return;

            // Animate Exit First
            first.style.marginTop = '-80px';
            first.style.opacity = '0';

            setTimeout(() => {
                if (first.parentNode) timelineFeed.removeChild(first);

                // Add new item at end
                const nextItemIndex = (timelineActiveIndex + 2) % timelineData.length;
                const nextData = timelineData[nextItemIndex];

                // Prepare new row (Inactive)
                const newRow = createTimelineRow({ ...nextData, active: false });
                newRow.style.opacity = '0';
                newRow.style.transform = 'translateY(20px)';
                timelineFeed.appendChild(newRow);

                // Animate Entrance
                requestAnimationFrame(() => {
                    newRow.style.opacity = '0.4'; // Start inactive opacity
                    newRow.style.transform = 'translateY(0)';
                });

                // Update Active State Visuals
                const rows = timelineFeed.children; // Should be 3 rows now
                if (rows.length >= 2) {
                    // Make middle one active
                    const activeRow = rows[1];
                    updateRowVisuals(activeRow, true);

                    // Make top one inactive
                    const topRow = rows[0];
                    updateRowVisuals(topRow, false);
                }

                timelineActiveIndex = (timelineActiveIndex + 1) % timelineData.length;

            }, 700);
        }

        function updateRowVisuals(row, isActive) {
            // Updated to remove BG/Border/Shadow from active state
            row.className = `flex items-center gap-2 p-3 rounded-2xl transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] ${isActive ? 'translate-x-4 scale-105' : 'opacity-40'}`;

            const dot = row.children[0];
            const text = row.children[1];

            if (isActive) {
                dot.className = 'w-3 h-3 rounded-full bg-[#00d2ff] shadow-[0_0_15px_#00d2ff] scale-100 transition-all duration-700';
                text.className = 'text-sm font-bold text-white tracking-wide transition-all duration-700';
            } else {
                dot.className = 'w-2 h-2 rounded-full bg-slate-600 transition-all duration-700';
                text.className = 'text-xs text-slate-400 font-medium transition-all duration-700';
            }
        }

        // Start Bento Animations
        setTimeout(() => {
            spawnCommCard();
            setInterval(spawnCommCard, 3500); // 3.5s

            initTimeline();
            setInterval(rotateTimeline, 3000); // 3s
        }, 1500);


        // --- Lead Capture Quiz Logic ---
        const quizData = {};

        function nextStep(targetStep, value) {
            if (value) quizData[`q${targetStep - 1}`] = value;

            const currentId = `step-${targetStep - 1}`;
            const nextId = `step-${targetStep}`;
            const currentEl = document.getElementById(currentId);
            const nextEl = document.getElementById(nextId);

            // Animate Out Current (Slide Left)
            currentEl.classList.add('-translate-x-full', 'opacity-0', 'pointer-events-none');
            currentEl.classList.remove('translate-x-0', 'opacity-100');

            // Animate In Next (Slide from Right)
            nextEl.classList.remove('translate-x-full', 'opacity-0', 'pointer-events-none');
            nextEl.classList.add('translate-x-0', 'opacity-100');

            // Update Progress
            const progress = document.getElementById('quiz-progress');
            if (targetStep === 2) progress.style.width = '50%';
            if (targetStep === 3) progress.style.width = '85%';
        }

        function prevStep(targetStep) {
            const currentId = `step-${targetStep + 1}`;
            const prevId = `step-${targetStep}`;
            const currentEl = document.getElementById(currentId);
            const prevEl = document.getElementById(prevId);

            // Animate Out Current (Slide Right)
            currentEl.classList.add('translate-x-full', 'opacity-0', 'pointer-events-none');
            currentEl.classList.remove('translate-x-0', 'opacity-100');

            // Animate In Prev (Slide from Left)
            prevEl.classList.remove('-translate-x-full', 'opacity-0', 'pointer-events-none');
            prevEl.classList.add('translate-x-0', 'opacity-100');

            // Update Progress
            const progress = document.getElementById('quiz-progress');
            if (targetStep === 1) progress.style.width = '10%';
            if (targetStep === 2) progress.style.width = '50%';
        }

        function submitQuiz(e) {
            e.preventDefault();

            // Collect Form Data
            const formData = {
                ...quizData,
                nome: e.target.querySelector('input[type="text"]').value,
                phone: e.target.querySelector('input[type="tel"]').value
            };

            // UI feedback
            const btn = e.target.querySelector('button');
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Enviando...';
            lucide.createIcons();

            fetch('process_quiz', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Success State
                        const currentEl = document.getElementById('step-3');
                        const nextEl = document.getElementById('step-success');
                        const progress = document.getElementById('quiz-progress');

                        currentEl.classList.add('-translate-x-full', 'opacity-0', 'pointer-events-none');
                        nextEl.classList.remove('translate-x-full', 'opacity-0', 'pointer-events-none');

                        progress.style.width = '100%';
                        progress.classList.remove('from-[#0c46e6]', 'to-[#00d2ff]');
                        progress.classList.add('from-green-400', 'to-emerald-600');
                    } else {
                        alert(data.message || 'Erro ao enviar. Tente novamente.');
                        btn.disabled = false;
                        btn.innerHTML = originalText;
                        lucide.createIcons();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Erro na conexão com o servidor.');
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                    lucide.createIcons();
                });
        }

        function resetQuiz() {
            location.reload(); // Simplest reset for now
        }
        lucide.createIcons();
    </script>
</body>

</html>