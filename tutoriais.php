<?php
// school-app/tutoriais.php
$lang = 'pt';
$meta_title = "Central de Tutoriais | BluEduca";
$meta_desc = "Aprenda a utilizar o aplicativo escolar BluEduca. Guias em vídeo para o diário do aluno, área financeira e comunicados.";
?>
<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <link rel="icon" type="image/png" href="assets/img/logo_app.png">
    <link rel="canonical" href="https://blueduca.com.br/tutoriais" />
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="https://blueduca.com.br/assets/img/logo_completo.png">

    <!-- Tailwind CSS -->
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

        video::-webkit-media-controls-panel {
            background-image: linear-gradient(transparent, rgba(0, 0, 0, 0.5));
        }

        /* Ocultar barra de rolagem em abas mobile */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-slate-50 relative overflow-x-hidden">
    
    <!-- Elementos decorativos de fundo para efeito Premium -->
    <div class="fixed top-[10%] left-[-10%] w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 pointer-events-none"></div>
    <div class="fixed bottom-[10%] right-[10%] w-96 h-96 bg-indigo-400 rounded-full mix-blend-multiply filter blur-[128px] opacity-10 pointer-events-none"></div>

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

    <main class="pt-32 pb-24 px-6 min-h-screen relative z-10" x-data="{ activeTab: 'apple' }">
        <div class="max-w-6xl mx-auto">
            
            <header class="text-center md:text-left mb-12 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <div class="inline-flex items-center justify-center px-4 py-1.5 mb-4 text-sm font-bold tracking-widest text-[#0c46e6] uppercase bg-blue-100/50 rounded-full shadow-sm">
                        <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Central de Ajuda
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        Aprenda a usar o app
                    </h1>
                </div>
                <p class="text-lg text-slate-500 max-w-md md:text-right font-medium">
                    Selecione uma das opções abaixo para assistir ao vídeo demonstrativo com o passo a passo.
                </p>
            </header>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                
                <!-- Sidebar / Abas Mobile -->
                <aside class="w-full lg:w-1/4 shrink-0">
                    <nav class="flex lg:flex-col gap-2 overflow-x-auto pb-4 lg:pb-0 hide-scrollbar snap-x">
                        
                        <!-- Instalação Apple -->
                        <button @click="activeTab = 'apple'" 
                                :class="activeTab === 'apple' ? 'bg-slate-900 text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-slate-400 hover:bg-slate-50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'apple' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-slate-200 group-hover:text-slate-900'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="apple" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Instalação Apple</span>
                        </button>

                        <!-- Instalação Android -->
                        <button @click="activeTab = 'android'" 
                                :class="activeTab === 'android' ? 'bg-[#3DDC84] text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-[#3DDC84] hover:bg-[#3DDC84]/10'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'android' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-[#3DDC84]/20 group-hover:text-[#3DDC84]'" class="p-1.5 rounded-lg transition-colors text-slate-600">
                                <!-- Ícone do Google em SVG -->
                                <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
                                </svg>
                            </div>
                            <span>Instalação Android</span>
                        </button>

                        <div class="hidden lg:block w-full h-px bg-slate-200 my-1"></div>
                        
                        <!-- Botão: Diário -->
                        <button @click="activeTab = 'diario'" 
                                :class="activeTab === 'diario' ? 'bg-[#0c46e6] text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-blue-300 hover:bg-blue-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'diario' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-blue-100 group-hover:text-blue-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="layout-dashboard" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Diário do Aluno</span>
                        </button>
                        
                        <!-- Botão: Financeiro -->
                        <button @click="activeTab = 'financeiro'" 
                                :class="activeTab === 'financeiro' ? 'bg-[#0c46e6] text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-blue-300 hover:bg-blue-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'financeiro' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-blue-100 group-hover:text-blue-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="wallet" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Área Financeira</span>
                        </button>

                        <!-- Botão: Comunicados -->
                        <button @click="activeTab = 'comunicados'" 
                                :class="activeTab === 'comunicados' ? 'bg-[#0c46e6] text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-blue-300 hover:bg-blue-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'comunicados' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-blue-100 group-hover:text-blue-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="bell" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Comunicados</span>
                        </button>

                        <div class="hidden lg:block w-full h-px bg-slate-200 my-1"></div>

                        <!-- Agenda -->
                        <button @click="activeTab = 'agenda'" 
                                :class="activeTab === 'agenda' ? 'bg-amber-500 text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-amber-300 hover:bg-amber-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'agenda' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-amber-100 group-hover:text-amber-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="calendar" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Agenda</span>
                        </button>

                        <!-- Documentos -->
                        <button @click="activeTab = 'documentos'" 
                                :class="activeTab === 'documentos' ? 'bg-amber-500 text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-amber-300 hover:bg-amber-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'documentos' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-amber-100 group-hover:text-amber-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="file-text" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Documentos de Matrícula</span>
                        </button>

                        <!-- Cardápio -->
                        <button @click="activeTab = 'cardapio'" 
                                :class="activeTab === 'cardapio' ? 'bg-amber-500 text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-amber-300 hover:bg-amber-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'cardapio' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-amber-100 group-hover:text-amber-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="coffee" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Cardápio</span>
                        </button>

                        <!-- Mensagens -->
                        <button @click="activeTab = 'mensagens'" 
                                :class="activeTab === 'mensagens' ? 'bg-amber-500 text-white shadow-md scale-[1.01]' : 'bg-white text-slate-600 border border-slate-200 hover:border-amber-300 hover:bg-amber-50/50'"
                                class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-bold transition-all whitespace-nowrap text-left snap-start group">
                            <div :class="activeTab === 'mensagens' ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-amber-100 group-hover:text-amber-600'" class="p-1.5 rounded-lg transition-colors">
                                <i data-lucide="message-square" class="w-4 h-4 shrink-0"></i>
                            </div>
                            <span>Mensagens</span>
                        </button>

                    </nav>
                </aside>

                <!-- Área de Conteúdo -->
                <div class="w-full lg:w-3/4 min-h-[500px]">
                    
                    <!-- TAB: DIÁRIO -->
                    <div x-show="activeTab === 'diario'" 
                         x-transition:enter="transition ease-out duration-500 delay-100"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         style="display: none;"
                         class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col md:flex-row gap-8 lg:gap-12 items-center md:items-start overflow-hidden relative group">
                        
                        <!-- Simulação do Smartphone -->
                        <div class="w-full max-w-[260px] shrink-0 relative">
                            <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-black bg-black shadow-2xl ring-1 ring-slate-900/5">
                                <div class="absolute top-0 inset-x-0 h-6 bg-black rounded-b-3xl w-[45%] mx-auto z-10"></div>
                                <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                       controls playsinline preload="metadata">
                                    <source src="assets/videos/tela-inicial-diario-aluno/tela_inicial_e_diario.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <!-- Instruções -->
                        <div class="w-full space-y-6 pt-4">
                            <div>
                                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Tela Inicial & Diário</h2>
                                <p class="text-slate-500 font-medium">Acompanhe a rotina, notas e avaliações do aluno de forma integrada e em tempo real.</p>
                            </div>
                            
                            <div class="space-y-4 pt-4">
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">1</div>
                                    <p class="text-slate-700 font-medium leading-tight">Ao abrir o app, você tem uma <strong>visão geral</strong> das atividades recentes e pendências na tela principal.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">2</div>
                                    <p class="text-slate-700 font-medium leading-tight">Toque no ícone de <strong>Diário</strong> no menu para ver o registro de aulas, conteúdos aplicados e atividades.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">3</div>
                                    <p class="text-slate-700 font-medium leading-tight">Selecione uma data específica no calendário para revisar o histórico daquele dia letivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: FINANCEIRO -->
                    <div x-show="activeTab === 'financeiro'" 
                         x-transition:enter="transition ease-out duration-500 delay-100"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         style="display: none;"
                         class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col md:flex-row gap-8 lg:gap-12 items-center md:items-start overflow-hidden relative group">
                        
                        <div class="w-full max-w-[260px] shrink-0 relative">
                            <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-black bg-black shadow-2xl ring-1 ring-slate-900/5">
                                <div class="absolute top-0 inset-x-0 h-6 bg-black rounded-b-3xl w-[45%] mx-auto z-10"></div>
                                <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                       controls playsinline preload="metadata">
                                    <source src="assets/videos/financeiro/financeiro.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="w-full space-y-6 pt-4">
                            <div>
                                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Área Financeira</h2>
                                <p class="text-slate-500 font-medium">Controle de mensalidades, faturas e emissão de boletos direto pelo aplicativo.</p>
                            </div>
                            
                            <div class="space-y-4 pt-4">
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">1</div>
                                    <p class="text-slate-700 font-medium leading-tight">Acesse o menu <strong>Financeiro</strong> na barra inferior ou no menu lateral.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">2</div>
                                    <p class="text-slate-700 font-medium leading-tight">Visualize o status de todos os pagamentos: <strong>Em aberto, Pagos ou Atrasados</strong>.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">3</div>
                                    <p class="text-slate-700 font-medium leading-tight">Toque em uma fatura específica para copiar o <strong>Código Pix</strong> ou gerar o PDF do boleto.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: COMUNICADOS -->
                    <div x-show="activeTab === 'comunicados'" 
                         x-transition:enter="transition ease-out duration-500 delay-100"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         style="display: none;"
                         class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col md:flex-row gap-8 lg:gap-12 items-center md:items-start overflow-hidden relative group">
                        
                        <div class="w-full max-w-[260px] shrink-0 relative">
                            <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-black bg-black shadow-2xl ring-1 ring-slate-900/5">
                                <div class="absolute top-0 inset-x-0 h-6 bg-black rounded-b-3xl w-[45%] mx-auto z-10"></div>
                                <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                       controls playsinline preload="metadata">
                                    <source src="assets/videos/comunicados/comunicados.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="w-full space-y-6 pt-4">
                            <div>
                                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Avisos e Comunicados</h2>
                                <p class="text-slate-500 font-medium">Receba recados importantes da coordenação e não perca nenhum evento da escola.</p>
                            </div>
                            
                            <div class="space-y-4 pt-4">
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">1</div>
                                    <p class="text-slate-700 font-medium leading-tight">Acesse a aba de <strong>Comunicados</strong> clicando no ícone do sino ou na lista principal.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">2</div>
                                    <p class="text-slate-700 font-medium leading-tight">Os recados não lidos ficam destacados. Clique para abrir os detalhes e ler o texto completo.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 text-[#0c46e6] rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-sm">3</div>
                                    <p class="text-slate-700 font-medium leading-tight">Ao abrir o comunicado, o sistema automaticamente registra a sua leitura para a coordenação saber que você foi avisado.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: INSTALACAO APPLE -->
                    <div x-show="activeTab === 'apple'" 
                         x-transition:enter="transition ease-out duration-500 delay-100"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         style="display: none;"
                         class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col md:flex-row gap-8 lg:gap-12 items-center md:items-start overflow-hidden relative group">
                        
                        <div class="w-full max-w-[260px] shrink-0 relative">
                            <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-black bg-black shadow-2xl ring-1 ring-slate-900/5">
                                <div class="absolute top-0 inset-x-0 h-6 bg-black rounded-b-3xl w-[45%] mx-auto z-10"></div>
                                <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                       controls playsinline preload="metadata">
                                    <source src="assets/videos/instalacao/guia_instalacao_apple.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="w-full space-y-6 pt-4">
                            <div>
                                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Instalação no iPhone</h2>
                                <p class="text-slate-500 font-medium">Siga os passos abaixo utilizando o navegador Safari.</p>
                            </div>
                            
                            <div class="space-y-4 pt-4">
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">1</div>
                                    <p class="text-slate-700 font-medium leading-tight">Abra o sistema no seu navegador <strong>Safari</strong>.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">2</div>
                                    <p class="text-slate-700 font-medium leading-tight">Toque no ícone de <strong>Compartilhar</strong> <i data-lucide="share" class="w-4 h-4 inline-block text-slate-500 mx-1"></i> na barra inferior da tela.</p>
                                </div>
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">3</div>
                                    <p class="text-slate-700 font-medium leading-tight">Selecione <strong>"Adicionar à Tela de Início"</strong> e confirme em "Adicionar".</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: INSTALACAO ANDROID -->
                    <div x-show="activeTab === 'android'" 
                         x-transition:enter="transition ease-out duration-500 delay-100"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         style="display: none;"
                         class="glass-card rounded-[2.5rem] p-6 lg:p-10 flex flex-col md:flex-row gap-8 lg:gap-12 items-center md:items-start overflow-hidden relative group">
                        
                        <div class="w-full max-w-[260px] shrink-0 relative">
                            <div class="relative w-full overflow-hidden rounded-[2.5rem] border-[8px] border-slate-900 bg-slate-900 shadow-2xl ring-1 ring-slate-900/5">
                                <div class="absolute top-2.5 right-1/2 translate-x-1/2 w-3.5 h-3.5 bg-black rounded-full z-10"></div>
                                <video class="w-full h-auto object-cover rounded-[2rem] bg-slate-900" 
                                       controls playsinline preload="metadata">
                                    <source src="assets/videos/instalacao/guia_instalacao_android.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="w-full space-y-6 pt-4">
                            <div>
                                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Instalação no Android</h2>
                                <p class="text-slate-500 font-medium">Siga os passos abaixo utilizando o navegador Google Chrome.</p>
                            </div>
                            
                            <div class="space-y-4 pt-4">
                                <div class="flex items-start bg-white/50 p-4 rounded-2xl border border-white/60 shadow-sm">
                                    <div class="flex-shrink-0 w-8 h-8 bg-[#3DDC84] text-white rounded-full flex items-center justify-center font-bold text-sm mr-4 mt-0.5 shadow-md">1</div>
                                    <p class="text-slate-700 font-medium leading-tight">Abra o sistema no seu navegador <strong>Google Chrome</strong>.</p>
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
                        </div>
                    </div>

                    <!-- TABS EM CONSTRUCAO -->
                    <div x-show="['agenda', 'documentos', 'cardapio', 'mensagens'].includes(activeTab)" 
                         x-transition:enter="transition ease-out duration-500 delay-100"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         style="display: none;"
                         class="glass-card rounded-[2.5rem] p-10 lg:p-16 flex flex-col items-center justify-center text-center overflow-hidden relative min-h-[400px]">
                        
                        <div class="w-24 h-24 bg-amber-100 text-amber-500 rounded-full flex items-center justify-center mb-6 shadow-inner ring-4 ring-amber-50">
                            <i data-lucide="hammer" class="w-10 h-10"></i>
                        </div>
                        <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Tutorial em Produção</h2>
                        <p class="text-slate-500 font-medium max-w-md">Nossa equipe está preparando um material em vídeo super especial para esta área. Volte em breve!</p>
                        
                    </div>

                </div>
            </div>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
        
        // Assegurar que os vídeos pausam ao mudar de aba
        document.addEventListener('alpine:init', () => {
            Alpine.effect(() => {
                // Seleciona todos os vídeos
                const videos = document.querySelectorAll('video');
                videos.forEach(v => v.pause());
            });
        });
    </script>
</body>

</html>
