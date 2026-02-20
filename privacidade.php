<?php
// school-app/privacidade.php
$lang = 'pt'; // Default for now
$meta_title = "Política de Privacidade | BluEduca";
$meta_desc = "Conheça como a BluEduca protege e gerencia seus dados de acordo com a LGPD, incluindo nosso aplicativo mobile.";
?>
<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <link rel="icon" type="image/png" href="assets/img/logo_app.png">
    <link rel="canonical" href="https://blueduca.com.br/privacidade" />
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="https://blueduca.com.br/assets/img/logo_completo.png">

    <!-- Tailwind CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #0f172a;
            -webkit-font-smoothing: antialiased;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .legal-content h2 {
            color: #0c46e6;
            font-weight: 800;
            font-size: 1.5rem;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .legal-content h3 {
            color: #1e293b;
            font-weight: 700;
            font-size: 1.25rem;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
        }

        .legal-content p {
            color: #475569;
            line-height: 1.8;
            margin-bottom: 1.25rem;
        }

        .legal-content ul {
            color: #475569;
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .legal-content li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body class="bg-slate-50">

    <!-- Simple Navbar for Legal Pages -->
    <nav class="fixed top-0 w-full z-50 glass-nav px-6 py-4">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <a href="index" class="flex items-center gap-2">
                <img src="assets/img/logo_completo.png" alt="BluEduca" class="h-8 w-auto">
            </a>
            <a href="index" class="text-sm font-bold text-slate-600 hover:text-[#0c46e6] transition-colors flex items-center gap-2">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Voltar ao Início
            </a>
        </div>
    </nav>

    <main class="pt-32 pb-24 px-6">
        <article class="max-w-4xl mx-auto bg-white p-8 md:p-16 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 legal-content">

            <header class="mb-12 border-b border-slate-100 pb-8 text-center md:text-left">
                <span class="text-[#0c46e6] font-extrabold tracking-widest uppercase text-xs mb-3 block">Transparência & Segurança</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">Política de Privacidade</h1>
                <p class="mt-4 text-slate-500 font-medium italic">Última atualização: 20 de Fevereiro de 2026</p>
            </header>

            <section>
                <p>Bem-vindo à <strong>BluEduca</strong>. A sua privacidade e a segurança dos seus dados são fundamentais para nós. Esta Política de Privacidade explica como coletamos, usamos, armazenamos e protegemos as informações fornecidas por você ao utilizar nossa plataforma de gestão escolar, incluindo nosso website e nossos aplicativos móveis para Android e iOS.</p>

                <h2>1. Coleta de Informações</h2>
                <p>Nós coletamos informações que você nos fornece diretamente ou através do uso de nossos serviços:</p>
                <ul>
                    <li><strong>Dados de conta e perfil:</strong> Nome, e-mail, telefone, cargo na instituição, foto de perfil.</li>
                    <li><strong>Dados institucionais:</strong> Nome da escola, endereço, número de alunos, informações de turmas.</li>
                    <li><strong>Dados educacionais:</strong> Notas, frequência, ocorrências disciplinares e comunicações escolares.</li>
                    <li><strong>Informações de pagamento:</strong> Processadas de forma segura por parceiros certificados.</li>
                </ul>

                <h3>1.1 Informações Coletadas no Aplicativo Móvel (Android e iOS)</h3>
                <p>Ao utilizar nossos aplicativos móveis, podemos coletar informações adicionais necessárias para o funcionamento adequado do app:</p>
                <ul>
                    <li><strong>Informações do Dispositivo:</strong> Modelo do hardware, sistema operacional e versão (Android ou iOS), identificadores exclusivos do dispositivo (Device ID) e informações da rede móvel.</li>
                    <li><strong>Permissões de Câmera e Galeria:</strong> Solicitamos acesso à sua câmera e galeria de fotos apenas quando você deseja enviar uma foto de perfil, anexar arquivos em mensagens, trabalhos ou no diário de classe. As imagens não são acessadas sem sua ação explícita.</li>
                    <li><strong>Notificações Push:</strong> Coletamos tokens de notificação para enviar alertas sobre recados, notas, frequência e comunicados da escola. Você pode desativar essas notificações a qualquer momento nas configurações do seu dispositivo.</li>
                    <li><strong>Dados de Uso:</strong> Informações sobre como você interage com o aplicativo, telas acessadas e tempo de uso, para fins de diagnóstico de erros e melhoria contínua.</li>
                </ul>

                <h2>2. Uso dos Dados</h2>
                <p>Utilizamos os dados coletados com a finalidade de:</p>
                <ul>
                    <li>Prover, operar e manter as funcionalidades da plataforma web e do aplicativo BluEduca.</li>
                    <li>Notificar pais, alunos e professores sobre eventos escolares, desempenho e comunicados importantes.</li>
                    <li>Processar transações financeiras (como mensalidades) de forma segura.</li>
                    <li>Prestar suporte técnico e responder a solicitações dos usuários.</li>
                    <li>Cumprir obrigações legais e regulatórias.</li>
                </ul>

                <h2>3. Privacidade de Menores e Crianças</h2>
                <p>Como a BluEduca é uma plataforma educacional, processamos dados de alunos (que podem ser menores de idade). Estes dados são inseridos pelas instituições de ensino (Controladoras dos Dados), que possuem a responsabilidade de obter o consentimento adequado dos pais ou responsáveis legais. A BluEduca atua como Operadora desses dados, utilizando-os estritamente para fins educacionais e administrativos, sem qualquer tipo de comercialização, perfilamento para publicidade ou uso indevido.</p>

                <h2>4. Proteção e Segurança</h2>
                <p>A BluEduca utiliza práticas de segurança avançadas, incluindo criptografia de dados em trânsito (SSL/TLS) e em repouso, firewalls e controles de acesso rigorosos. Monitoramos nossos sistemas constantemente para evitar acessos não autorizados, vazamentos e garantir a integridade das informações escolares.</p>

                <h2>5. Compartilhamento de Dados</h2>
                <p>A BluEduca <strong>não vende, aluga ou comercializa</strong> seus dados pessoais, nem os dados dos alunos. O compartilhamento ocorre apenas:</p>
                <ul>
                    <li>Com provedores de serviços essenciais (hospedagem em nuvem, provedores de envio de e-mail/SMS e gateways de pagamento), sob rigorosos contratos de confidencialidade.</li>
                    <li>Para cumprimento de ordens judiciais ou exigências legais.</li>
                    <li>Entre os usuários da mesma instituição de ensino (ex: professores acessando dados de seus alunos), conforme as permissões configuradas pela própria escola.</li>
                </ul>

                <h2>6. Seus Direitos e Exclusão de Dados (LGPD)</h2>
                <p>Em conformidade com a Lei Geral de Proteção de Dados (LGPD) e diretrizes das lojas de aplicativos (Apple App Store e Google Play), você possui os seguintes direitos:</p>
                <ul>
                    <li><strong>Acesso e Correção:</strong> Visualizar e atualizar seus dados pessoais diretamente pelo painel web ou aplicativo.</li>
                    <li><strong>Revogação de Consentimento:</strong> Ajustar permissões e desativar notificações através das configurações do seu dispositivo móvel.</li>
                    <li><strong>Exclusão de Conta e Dados:</strong> Você pode solicitar a exclusão de sua conta e dos dados associados a ela. Pais e alunos devem solicitar a exclusão diretamente junto à secretaria da instituição de ensino (Controladora), que fará a remoção do sistema. Responsáveis pela escola podem solicitar a exclusão da conta da instituição entrando em contato com nosso suporte técnico. Após a solicitação, os dados serão excluídos de nossos servidores, exceto aqueles que precisarmos manter para cumprimento de obrigações legais ou financeiras.</li>
                </ul>

                <h2>7. Alterações nesta Política</h2>
                <p>Podemos atualizar esta Política de Privacidade periodicamente para refletir mudanças em nossas práticas, tecnologias ou requisitos legais (como atualizações nas políticas do Google Play ou App Store). Notificaremos os usuários sobre mudanças significativas através do nosso site, aplicativo ou por e-mail.</p>

                <h2>8. Contato</h2>
                <p>Caso tenha qualquer dúvida sobre esta Política, sobre como seus dados são tratados, ou para exercer seus direitos, entre em contato com nosso Encarregado de Proteção de Dados (DPO) pelo e-mail:</p>
                <p><a href="mailto:privacidade@blueduca.com.br" class="text-[#0c46e6] font-bold text-lg hover:underline">privacidade@blueduca.com.br</a></p>
            </section>

        </article>
    </main>

    <!-- Footer Include -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>