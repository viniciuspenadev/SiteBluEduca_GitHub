<?php
// school-app/guia-instalacao.php
$lang = 'pt';
$meta_title = "Guia de Instalação do App | BluEduca";
$meta_desc = "Aprenda como instalar o aplicativo BluEduca no seu celular Android ou iPhone (iOS) de forma rápida e fácil.";
?>
<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <link rel="icon" type="image/png" href="assets/img/logo_app.png">
    <link rel="canonical" href="https://blueduca.com.br/guia-instalacao" />
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="https://blueduca.com.br/assets/img/logo_completo.png">

    <!-- Tailwind CSS (se nao houver build script rodando) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #0f172a;
            -webkit-font-smoothing: antialiased;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 20px 40px -15px rgba(0,0,0,0.05);
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Ocultar barra de rolagem nos vídeos se houver */
        video::-webkit-media-controls-panel {
            background-image: linear-gradient(transparent, rgba(0, 0, 0, 0.5));
        }
    </style>
</head>

<body class="bg-slate-50 relative overflow-x-hidden">
    
    <!-- Elementos decorativos de fundo para efeito Premium -->
    <div class="fixed top-[-10%] left-[-10%] w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 pointer-events-none"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-96 h-96 bg-emerald-400 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 pointer-events-none"></div>

    <nav class="fixed top-0 w-full z-50 glass-nav px-6 py-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <a href="index" class="flex items-center gap-2">
                <img src="assets/img/logo_completo.png" alt="BluEduca" class="h-8 w-auto relative z-10">
            </a>
            <a href="index"
                class="text-sm font-bold text-slate-600 hover:text-[#0c46e6] transition-colors flex items-center gap-2">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Voltar ao Início
            </a>
        </div>
    </nav>

    <main class="pt-32 pb-24 px-6 min-h-screen relative z-10">
        <div class="max-w-6xl mx-auto">
            
            <header class="text-center mb-16 md:mb-20">
                <div class="inline-flex items-center justify-center px-4 py-1.5 mb-6 text-sm font-bold tracking-widest text-[#0c46e6] uppercase bg-blue-100/50 rounded-full shadow-sm">
                    <i data-lucide="download-cloud" class="w-4 h-4 mr-2"></i> Guia Passo a Passo
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                    Tenha o app da BluEduca <br class="hidden md:block"/> no seu celular
                </h1>
                <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto font-medium">
                    Veja como é fácil instalar o nosso aplicativo escolar. Selecione o sistema do seu smartphone abaixo e siga o vídeo demonstrativo.
                </p>
            </header>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                
                <!-- Tutorial iPhone / iOS -->
                <article class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col hover:scale-[1.01] transition-transform duration-500 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-slate-100 rounded-bl-full -z-10 group-hover:bg-slate-200 transition-colors duration-500"></div>
                    
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-slate-900 mb-1 flex items-center gap-3">
                                iPhone <span class="text-sm font-bold tracking-wider text-slate-400 uppercase">iOS</span>
                            </h2>
                            <p class="text-slate-500 font-medium">Instalação via navegador Safari</p>
                        </div>
                        <div class="flex items-center justify-center w-16 h-16 bg-slate-900 text-white rounded-2xl shadow-lg shadow-slate-900/20">
                            <i data-lucide="apple" class="w-8 h-8"></i>
                        </div>
                    </div>
                    
                    <!-- Simulação do Smartphone -->
                    <div class="w-full max-w-[280px] mx-auto relative mb-10">
                        <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-black bg-black shadow-2xl ring-1 ring-slate-900/5">
                            <!-- Notch ou Dynamic Island Genérico -->
                            <div class="absolute top-0 inset-x-0 h-6 bg-black rounded-b-3xl w-[45%] mx-auto z-10"></div>
                            
                            <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                   controls playsinline preload="metadata">
                                <source src="assets/videos/instalacao/guia_instalacao_apple.mp4" type="video/mp4">
                                Seu navegador não suporta vídeos.
                            </video>
                        </div>
                    </div>
                    
                    <!-- Instruções -->
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">1</div>
                            <p class="text-slate-700 font-medium leading-tight">Abra esta página no seu aplicativo navegador <strong>Safari</strong>.</p>
                        </div>
                        <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">2</div>
                            <p class="text-slate-700 font-medium leading-tight">Toque no ícone de <strong>Compartilhar</strong> <i data-lucide="share" class="w-4 h-4 inline-block text-slate-500 mx-1"></i> na barra inferior da tela.</p>
                        </div>
                        <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">3</div>
                            <p class="text-slate-700 font-medium leading-tight">Selecione a opção <strong>"Adicionar à Tela de Início"</strong> e confirme no botão "Adicionar".</p>
                        </div>
                    </div>
                </article>

                <!-- Tutorial Android -->
                <article class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col hover:scale-[1.01] transition-transform duration-500 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#3DDC84]/10 rounded-bl-full -z-10 group-hover:bg-[#3DDC84]/20 transition-colors duration-500"></div>

                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-slate-900 mb-1 flex items-center gap-3">
                                Android <span class="text-sm font-bold tracking-wider text-slate-400 uppercase">Google</span>
                            </h2>
                            <p class="text-slate-500 font-medium">Instalação via navegador Chrome</p>
                        </div>
                        <div class="flex items-center justify-center w-16 h-16 bg-[#3DDC84] text-white rounded-2xl shadow-lg shadow-[#3DDC84]/20">
                            <i data-lucide="smartphone" class="w-8 h-8"></i>
                        </div>
                    </div>
                    
                    <!-- Simulação do Smartphone -->
                    <div class="w-full max-w-[280px] mx-auto relative mb-10">
                        <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-slate-900 bg-slate-900 shadow-2xl ring-1 ring-slate-900/5">
                            <!-- Furo da Câmera Genérico -->
                            <div class="absolute top-2.5 right-1/2 translate-x-1/2 w-3.5 h-3.5 bg-black rounded-full z-10"></div>
                            
                            <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                   controls playsinline preload="metadata">
                                <source src="assets/videos/instalacao/guia_instalacao_android.mp4" type="video/mp4">
                                Seu navegador não suporta vídeos.
                            </video>
                        </div>
                    </div>
                    
                    <!-- Instruções -->
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-[#3DDC84] text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">1</div>
                            <p class="text-slate-700 font-medium leading-tight">Abra esta página no seu aplicativo navegador <strong>Chrome</strong>.</p>
                        </div>
                        <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-[#3DDC84] text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">2</div>
                            <p class="text-slate-700 font-medium leading-tight">Toque nos <strong>três pontos verticais</strong> <i data-lucide="more-vertical" class="w-4 h-4 inline-block text-slate-500"></i> no canto superior direito.</p>
                        </div>
                        <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                            <div class="flex-shrink-0 w-8 h-8 bg-[#3DDC84] text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">3</div>
                            <p class="text-slate-700 font-medium leading-tight">Selecione <strong>"Adicionar à Tela Inicial"</strong> ou "Instalar Aplicativo".</p>
                        </div>
                    </div>
                </article>

            </div>
            
            <div class="mt-20 text-center">
                <a href="index" class="group inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-300 bg-[#0c46e6] border border-transparent rounded-full shadow-xl shadow-blue-500/30 hover:bg-blue-700 hover:shadow-2xl hover:-translate-y-1 gap-3">
                    <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i> 
                    Voltar para o Início
                </a>
            </div>

        </div>
    </main>

    <!-- Opcional se for carregar footer, deve estar no mesmo design em tese -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>
</body>

</html>
