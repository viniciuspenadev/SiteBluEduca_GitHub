<?php
// school-app/privacidade.php
$lang = 'pt'; // Default for now
$meta_title = "Política de Privacidade | BluEduca";
$meta_desc = "Conheça como a BluEduca protege e gerencia seus dados de acordo com a LGPD.";
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
    <meta name="robots" content="noindex, follow">
    <!-- Páginas legais costumam ser noindex para focar autoridade na Home, mas follow para links -->

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" content="https://blueduca.com.br/assets/img/logo_completo.png">

    <!-- Tailwind CSS -->
    <!-- Tailwind CSS Local -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

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
            <a href="index"
                class="text-sm font-bold text-slate-600 hover:text-[#0c46e6] transition-colors flex items-center gap-2">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Voltar ao Início
            </a>
        </div>
    </nav>

    <main class="pt-32 pb-24 px-6">
        <article
            class="max-w-3xl mx-auto bg-white p-8 md:p-16 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 legal-content">

            <header class="mb-12 border-b border-slate-100 pb-8 text-center md:text-left">
                <span class="text-[#0c46e6] font-extrabold tracking-widest uppercase text-xs mb-3 block">Transparência &
                    Segurança</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">Política de Privacidade
                </h1>
                <p class="mt-4 text-slate-500 font-medium italic">Última atualização: 04 de Fevereiro de 2026</p>
            </header>

            <section>
                <p>Bem-vindo à <strong>BluEduca</strong>. A sua privacidade e a segurança dos seus dados são
                    fundamentais para nós. Esta Política de Privacidade explica como coletamos, usamos, armazenamos e
                    protegemos as informações fornecidas por você ao utilizar nossa plataforma de gestão escolar.</p>

                <h2>1. Coleta de Informações</h2>
                <p>Nós coletamos informações que você nos fornece diretamente, como:</p>
                <ul>
                    <li>Dados de cadastro (nome, e-mail, telefone, cargo na instituição).</li>
                    <li>Dados da escola (nome da instituição, endereço, número de alunos).</li>
                    <li>Informações de pagamento (processadas de forma segura por parceiros certificados).</li>
                </ul>

                <h2>2. Uso dos Dados</h2>
                <p>Utilizamos os dados coletados exclusivamente para:</p>
                <ul>
                    <li>Prover e manter as funcionalidades da plataforma BluEduca.</li>
                    <li>Processar transações e enviar confirmações de pagamento.</li>
                    <li>Enviar comunicados importantes, atualizações de sistema e suporte técnico.</li>
                    <li>Melhorar a experiência do usuário e personalizar o atendimento.</li>
                </ul>

                <h2>3. Proteção e Segurança</h2>
                <p>A BluEduca utiliza práticas de segurança avançadas, incluindo criptografia de dados (SSL), firewalls
                    e controles de acesso rigorosos. Monitoramos nossos sistemas constantemente para evitar acessos não
                    autorizados e garantir a integridade das informações escolares.</p>

                <h2>4. Compartilhamento de Dados</h2>
                <p>A BluEduca <strong>não vende nem aluga</strong> seus dados pessoais para terceiros. O
                    compartilhamento ocorre apenas quando estritamente necessário para o funcionamento do serviço, como
                    operadoras de cartão de crédito e serviços de infraestrutura em nuvem, sempre garantindo que estes
                    parceiros sigam normas rigorosas de privacidade.</p>

                <h2>5. Seus Direitos (LGPD)</h2>
                <p>De acordo com a Lei Geral de Proteção de Dados (LGPD), você tem o direito de:</p>
                <ul>
                    <li>Acessar seus dados e solicitar uma cópia dos mesmos.</li>
                    <li>Corrigir dados incompletos ou inexatos.</li>
                    <li>Solicitar a anonimização ou exclusão de dados desnecessários.</li>
                    <li>Revogar o consentimento a qualquer momento.</li>
                </ul>

                <h2>6. Cookies e Tecnologias de Rastreio</h2>
                <p>Utilizamos cookies para entender como os usuários navegam em nosso site e para lembrar as
                    preferências de configuração. Você pode gerenciar suas preferências de cookies através do nosso
                    banner de privacidade disponível na página inicial.</p>

                <h2>7. Contato</h2>
                <p>Caso tenha qualquer dúvida sobre esta Política ou sobre como seus dados são tratados, entre em
                    contato com nosso Encarregado de Proteção de Dados (DPO) pelo e-mail: <br>
                    <a href="mailto:privacidade@blueduca.com.br"
                        class="text-[#0c46e6] font-bold">privacidade@blueduca.com.br</a>
                </p>
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