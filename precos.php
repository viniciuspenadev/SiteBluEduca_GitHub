<?php
// school-app/precos.php

// 1. Language Configuration
$allowed_langs = ['pt', 'en', 'es'];
$lang = $_GET['lang'] ?? 'pt';
if (!in_array($lang, $allowed_langs)) {
    $lang = 'pt';
}

// SEO Meta Data
$meta_title = "Planos e Preços | BluEduca";
$meta_desc = "Escolha o plano ideal para sua escola. Comunicação, Financeiro, CRM Leads e muito mais.";

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_desc; ?>">

    <!-- Tailwind CSS -->
    <!-- Tailwind CSS Local -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #0f172a;
            overflow-x: hidden;
        }

        .tech-grid {
            background-size: 50px 50px;
            background-image:
                linear-gradient(to right, rgba(12, 70, 230, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(12, 70, 230, 0.03) 1px, transparent 1px);
        }

        .tech-card {
            background: rgba(255, 255, 255, 1);
            border: 1px solid #e2e8f0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 24px;
        }

        .tech-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.1);
            border-color: #cbd5e1;
        }

        .tech-card.featured {
            border: 2px solid #0c46e6;
            box-shadow: 0 20px 40px -10px rgba(12, 70, 230, 0.1);
        }

        /* Slider Styles */
        input[type=range]::-webkit-slider-runnable-track {
            background: #e2e8f0;
            height: 8px;
            border-radius: 4px;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 24px;
            width: 24px;
            border-radius: 50%;
            background: #0c46e6;
            cursor: pointer;
            margin-top: -8px;
            box-shadow: 0 4px 6px rgba(12, 70, 230, 0.2);
        }

        /* Logo Animation */
        .logo-container {
            width: 100px;
            height: 100px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        .logo-container:hover {
            transform: rotateY(180deg);
        }

        .app-icon {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .logo-front {
            background: white;
            z-index: 2;
        }

        .logo-back {
            background: #f1f5f9;
            transform: rotateY(180deg);
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Comparison Table Rows */
        .row-category {
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        .btn-primary {
            background: #0c46e6;
            color: white;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #0000bf;
            transform: scale(1.05);
        }

        .plan-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: #0c46e6;
            color: white;
            padding: 4px 16px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(12, 70, 230, 0.3);
        }

        .category-header {
            cursor: pointer;
            transition: background 0.2s;
        }

        .category-header:hover {
            background-color: #f1f5f9;
        }

        .chevron-icon {
            transition: transform 0.3s;
        }

        .category-header.active .chevron-icon {
            transform: rotate(180deg);
        }

        .category-content {
            display: none;
        }

        .category-content.active {
            display: table-row-group;
        }
    </style>
</head>

<body class="selection:bg-[#0c46e6] selection:text-white">

    <!-- Interactive Navigation -->
    <nav class="fixed z-50 w-full top-0 md:top-6 px-4">
        <div
            class="max-w-5xl mx-auto bg-white/80 backdrop-blur-xl border border-slate-200 rounded-full px-8 py-3 flex items-center justify-between shadow-2xl shadow-blue-500/5">
            <a href="index.php" class="flex items-center gap-2">
                <i data-lucide="graduation-cap" class="w-8 h-8 text-[#0c46e6]"></i>
                <span class="font-bold text-2xl text-[#0000bf] tracking-tight">Blu<span
                        class="text-blue-600">Educa</span></span>
            </a>
            <div class="hidden md:flex items-center gap-6">
                <a href="index.php"
                    class="text-sm font-bold text-slate-600 hover:text-[#0c46e6] transition-all">Home</a>
                <a href="#precos" class="text-sm font-bold text-[#0c46e6]">Preços</a>
                <a href="#comparativo"
                    class="text-sm font-bold text-slate-600 hover:text-[#0c46e6] transition-all">Comparativo</a>
            </div>
            <a href="#contato"
                class="btn-primary px-6 py-2.5 rounded-full text-sm font-bold shadow-lg shadow-blue-500/20">Fale
                Conosco</a>
        </div>
    </nav>

    <main class="w-full pt-44 pb-32">
        <div class="absolute inset-0 tech-grid -z-10"></div>

        <!-- HERO SECTION -->
        <section class="max-w-7xl mx-auto px-4 text-center mb-16 reveal">
            <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 mb-6 kerning-tight">Escolha um Plano</h1>
            <p class="text-xl text-slate-500 max-w-3xl mx-auto font-medium">
                A eficiência da comunicação na sua escola requer uma solução simples e ágil.
            </p>
        </section>

        <!-- INTERACTIVE SLIDER -->
        <section class="max-w-3xl mx-auto px-4 mb-24 reveal" style="transition-delay: 0.1s;">
            <div class="bg-slate-50 border border-slate-200 p-8 rounded-[2rem] text-center shadow-sm">
                <p class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-6">Quantos alunos sua escola
                    possui?</p>
                <div class="flex items-center justify-center gap-6 mb-8">
                    <span class="text-4xl font-black text-[#0c46e6]" id="student-count">250</span>
                    <span class="text-xl font-bold text-slate-400">alunos</span>
                </div>
                <input type="range" id="student-slider" min="50" max="2000" step="50" value="250"
                    class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer">
                <div class="flex justify-between mt-4 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <span>50 Alunos</span>
                    <span>2000+ Alunos</span>
                </div>
            </div>
        </section>

        <!-- PRICING CARDS -->
        <section id="precos" class="max-w-7xl mx-auto px-4 mb-32">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- PLANO BÁSICO -->
                <div class="tech-card p-10 flex flex-col relative reveal" id="card-basic"
                    style="transition-delay: 0.2s;">
                    <div class="mb-8">
                        <span
                            class="text-orange-500 font-extrabold text-xs uppercase tracking-widest mb-2 block">Básico</span>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Comunicação</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Ideal para começar a digitalizar sua escola.
                        </p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Mensagens Ilimitadas
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Financeiro Incluso
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-400">
                            <i data-lucide="x" class="w-4 h-4 text-red-300"></i> CRM Leads
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-400">
                            <i data-lucide="x" class="w-4 h-4 text-red-300"></i> Matrícula Digital
                        </li>
                    </ul>

                    <div class="border-t border-slate-100 pt-8">
                        <div class="mb-6">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Limite do
                                Plano</p>
                            <p class="text-sm font-bold text-slate-700">Até 150 alunos</p>
                        </div>
                        <a href="https://wa.me/5500000000000"
                            class="block text-center border-2 border-slate-200 py-4 rounded-xl font-bold text-slate-700 hover:border-slate-900 transition-all">Fale
                            conosco</a>
                    </div>
                </div>

                <!-- PLANO PADRÃO -->
                <div class="tech-card p-10 flex flex-col relative featured reveal" id="card-standard"
                    style="transition-delay: 0.3s;">
                    <div class="plan-badge">RECOMENDADO</div>
                    <div class="mb-8">
                        <span
                            class="text-[#0c46e6] font-extrabold text-xs uppercase tracking-widest mb-2 block">Padrão</span>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Full Módulos</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Todos os módulos para uma gestão 360º.</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-900 font-bold">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Tudo do Básico +
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Formulários
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-bold">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Matrícula Digital
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-bold">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Módulo "Cheguei"
                        </li>
                    </ul>

                    <div class="border-t border-slate-100 pt-8">
                        <div class="mb-6">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Limite do
                                Plano</p>
                            <p class="text-sm font-bold text-slate-700">Até 600 alunos</p>
                        </div>
                        <a href="https://wa.me/5500000000000"
                            class="block text-center bg-[#0c46e6] py-4 rounded-xl font-bold text-white shadow-xl shadow-blue-500/30 hover:bg-blue-700 transition-all">Fale
                            conosco</a>
                    </div>
                </div>

                <!-- PLANO AVANÇADO -->
                <div class="tech-card p-10 flex flex-col relative reveal" id="card-advanced"
                    style="transition-delay: 0.4s;">
                    <div class="mb-8">
                        <span
                            class="text-blue-400 font-extrabold text-xs uppercase tracking-widest mb-2 block">Avançado</span>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Escala Total</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Sua escola sem limites e integrada.</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-900 font-bold">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Tudo do Padrão +
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-bold">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> CRM de Leads
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <i data-lucide="check" class="w-4 h-4 text-green-500"></i> Integrações (API)
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-bold">
                            <i data-lucide="zap" class="w-4 h-4 text-blue-500"></i> Notificações WhatsApp
                        </li>
                    </ul>

                    <div class="border-t border-slate-100 pt-8">
                        <div class="mb-6">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Limite do
                                Plano</p>
                            <p class="text-sm font-bold text-slate-700">Matrículas Ilimitadas</p>
                        </div>
                        <a href="https://wa.me/5500000000000"
                            class="block text-center border-2 border-slate-900 py-4 rounded-xl font-bold text-slate-900 hover:bg-slate-900 hover:text-white transition-all">Fale
                            conosco</a>
                    </div>
                </div>

                <!-- PLANO ENTERPRISE -->
                <div class="tech-card p-10 flex flex-col relative bg-slate-900 text-white reveal"
                    style="transition-delay: 0.5s;">
                    <div class="logo-container mx-auto mb-10">
                        <div class="app-icon logo-front">
                            <img src="assets/img/logo_app.png" class="w-12 h-12" alt="BluEduca">
                        </div>
                        <div class="app-icon logo-back">
                            <i data-lucide="school" class="w-10 h-10 text-slate-400"></i>
                        </div>
                    </div>
                    <div class="mb-8 text-center">
                        <span
                            class="text-blue-400 font-extrabold text-xs uppercase tracking-widest mb-2 block">Enterprise</span>
                        <h3 class="text-3xl font-black mb-4">White-label</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">O app com a marca da sua escola nas lojas.</p>
                    </div>

                    <a href="https://wa.me/5500000000000"
                        class="block text-center bg-white py-4 rounded-xl font-bold text-slate-900 hover:bg-slate-100 transition-all mt-auto">Consultar</a>
                </div>
            </div>
        </section>

        <!-- DETAILED COMPARATIVE TABLE (Based on Image Reference) -->
        <section id="comparativo" class="max-w-6xl mx-auto px-4 mb-40 reveal">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Comparativo Completo</h2>
                <p class="text-slate-500 font-medium">Cada detalhe pensado para sua escola</p>
            </div>

            <div class="overflow-x-auto rounded-[2rem] border border-slate-200 bg-white">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead>
                        <tr class="bg-white">
                            <th class="p-8"></th>
                            <th class="p-8 text-center">
                                <p class="text-orange-500 font-extrabold text-xs uppercase mb-2">Básico</p>
                                <a href="#"
                                    class="inline-block border border-orange-200 text-orange-600 px-6 py-2 rounded-full text-xs font-bold hover:bg-orange-50 transition-all">Fale
                                    conosco</a>
                            </th>
                            <th class="p-8 text-center">
                                <p class="text-red-500 font-extrabold text-xs uppercase mb-2">Padrão</p>
                                <a href="#"
                                    class="inline-block border border-red-200 text-red-600 px-6 py-2 rounded-full text-xs font-bold hover:bg-red-50 transition-all">Fale
                                    conosco</a>
                            </th>
                            <th class="p-8 text-center">
                                <p class="text-blue-600 font-extrabold text-xs uppercase mb-2">Avançado</p>
                                <a href="#"
                                    class="inline-block border border-blue-200 text-blue-600 px-6 py-2 rounded-full text-xs font-bold hover:bg-blue-50 transition-all">Fale
                                    conosco</a>
                            </th>
                        </tr>
                    </thead>

                    <!-- CATEGORIA: SUPORTE -->
                    <tbody class="category-group">
                        <tr class="category-header active" data-target="support">
                            <td class="p-4 px-8 font-bold text-slate-900 flex items-center justify-between">
                                Suporte <i data-lucide="chevron-down" class="w-4 h-4 chevron-icon"></i>
                            </td>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                    <tbody class="category-content active" id="support">
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Suporte Técnico</td>
                            <td class="p-4 text-center text-xs font-semibold text-slate-700">Chat e e-mail</td>
                            <td class="p-4 text-center text-xs font-semibold text-slate-700">Chat e e-mail</td>
                            <td class="p-4 text-center text-xs font-bold text-slate-900">Prioritário 24/7</td>
                        </tr>
                    </tbody>

                    <!-- CATEGORIA: COMUNICAÇÃO -->
                    <tbody class="category-group">
                        <tr class="category-header active" data-target="comms">
                            <td class="p-4 px-8 font-bold text-slate-900 flex items-center justify-between">
                                Comunicação <i data-lucide="chevron-down" class="w-4 h-4 chevron-icon"></i>
                            </td>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                    <tbody class="category-content active" id="comms">
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Envio de Mensagens Ilimitado</td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Histórico de Mensagens</td>
                            <td class="p-4 text-center text-xs font-semibold text-slate-700">5 anos</td>
                            <td class="p-4 text-center text-xs font-semibold text-slate-700">5 anos</td>
                            <td class="p-4 text-center text-xs font-bold text-slate-900">Ilimitado</td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Envio de Áudio e Vídeo</td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Notificações via WhatsApp</td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                        </tr>
                    </tbody>

                    <!-- CATEGORIA: MÓDULOS -->
                    <tbody class="category-group">
                        <tr class="category-header active" data-target="modules">
                            <td class="p-4 px-8 font-bold text-slate-900 flex items-center justify-between">
                                Módulos <i data-lucide="chevron-down" class="w-4 h-4 chevron-icon"></i>
                            </td>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                    <tbody class="category-content active" id="modules">
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Financeiro Escolar</td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Formulários Digitais</td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                            <td class="p-4 text-center"><i data-lucide="check"
                                    class="mx-auto w-5 h-5 text-green-500"></i></td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Matrícula Digital</td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Módulo "Cheguei"</td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">CRM de Leads (Kanban)</td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="p-4 px-8 text-sm text-slate-600">Integrações (API)</td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><i data-lucide="x" class="mx-auto w-5 h-5 text-red-400"></i>
                            </td>
                            <td class="p-4 text-center"><span class="text-green-600 font-bold text-xs">INCLUSO</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- CTA FINAL -->
        <section class="max-w-4xl mx-auto px-4 reveal">
            <div
                class="bg-gradient-to-br from-[#0c46e6] to-[#00d2ff] p-16 rounded-[4rem] text-center text-white shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <h2 class="text-4xl font-black mb-8 relative z-10">Revolucione sua escola hoje.</h2>
                <a href="#contato"
                    class="inline-block bg-white text-[#0c46e6] px-12 py-5 rounded-2xl font-black text-lg hover:scale-105 transition-all shadow-xl shadow-white/10 relative z-10">Começar
                    Agora</a>
            </div>
        </section>

    </main>

    <script>
        lucide.createIcons();

        // Student Slider Interactivity
        const slider = document.getElementById('student-slider');
        const countDisplay = document.getElementById('student-count');
        const cards = {
            basic: document.getElementById('card-basic'),
            standard: document.getElementById('card-standard'),
            advanced: document.getElementById('card-advanced')
        };

        slider.addEventListener('input', (e) => {
            const val = e.target.value;
            countDisplay.innerText = val;

            // Update Recommended Plan
            Object.values(cards).forEach(c => c.classList.remove('featured'));
            document.querySelectorAll('.plan-badge').forEach(b => b.remove());

            if (val <= 150) {
                cards.basic.classList.add('featured');
                addBadge(cards.basic);
            } else if (val <= 600) {
                cards.standard.classList.add('featured');
                addBadge(cards.standard);
            } else {
                cards.advanced.classList.add('featured');
                addBadge(cards.advanced);
            }
        });

        function addBadge(card) {
            const badge = document.createElement('div');
            badge.className = 'plan-badge';
            badge.innerText = 'RECOMENDADO';
            card.prepend(badge);
        }

        // Accordion Table behavior
        document.querySelectorAll('.category-header').forEach(header => {
            header.addEventListener('click', () => {
                const targetId = header.getAttribute('data-target');
                const content = document.getElementById(targetId);

                header.classList.toggle('active');
                content.classList.toggle('active');
            });
        });

        // Scroll Reveal
        const reveal = () => {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 100;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>
</body>

</html>