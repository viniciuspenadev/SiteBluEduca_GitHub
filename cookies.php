<?php
// school-app/cookies.php
$lang = 'pt';
$meta_title = "Política de Cookies | BluEduca";
$meta_desc = "Entenda como a BluEduca utiliza cookies para melhorar sua experiência de navegação e gestão escolar.";
?>
<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $meta_title; ?>
    </title>
    <link rel="icon" type="image/png" href="assets/img/logo_app.png">
    <link rel="canonical" href="https://blueduca.com.br/cookies" />
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="robots" content="noindex, follow">

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
                    UX</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">Política de Cookies</h1>
                <p class="mt-4 text-slate-500 font-medium italic">Última atualização: 04 de Fevereiro de 2026</p>
            </header>

            <section>
                <p>A <strong>BluEduca</strong> utiliza cookies e tecnologias semelhantes para fornecer, proteger e
                    melhorar nossos serviços. Esta política detalha como e por que usamos essas tecnologias.</p>

                <h2>1. O que são Cookies?</h2>
                <p>Cookies são pequenos arquivos de texto enviados pelo site ao seu navegador e armazenados em seu
                    dispositivo. Eles permitem que o site reconheça seu dispositivo e armazene informações sobre suas
                    preferências ou ações passadas.</p>

                <h2>2. Como Utilizamos os Cookies</h2>
                <p>Utilizamos os cookies para as seguintes finalidades:</p>
                <ul>
                    <li><strong>Essenciais:</strong> Necessários para o funcionamento básico da plataforma, como login e
                        segurança.</li>
                    <li><strong>Desempenho:</strong> Coletam informações anônimas sobre como os usuários interagem com o
                        site, permitindo melhorias técnicas.</li>
                    <li><strong>Funcionalidade:</strong> Lembram de escolhas feitas por você (como idioma) para
                        proporcionar uma experiência personalizada.</li>
                    <li><strong>Marketing:</strong> Utilizados para entregar anúncios mais relevantes de acordo com seus
                        interesses.</li>
                </ul>

                <h2>3. Gestão de Cookies</h2>
                <p>Você pode controlar ou excluir os cookies a qualquer momento através das configurações de seu
                    navegador ou utilizando nossa Central de Mudança de Preferências disponível na página inicial
                    (Pop-up de Consentimento).</p>
                <p>Note que a desativação de certos cookies pode afetar a funcionalidade da plataforma e sua experiência
                    como usuário.</p>

                <h2>4. Cookies de Terceiros</h2>
                <p>Podemos utilizar serviços de terceiros, como Google Analytics, para analisar o desempenho do nosso
                    site. Esses parceiros podem definir seus próprios cookies em seu navegador.</p>

                <h2>5. Dúvidas</h2>
                <p>Se você tiver dúvidas sobre o uso de cookies em nossa plataforma, entre em contato via <a
                        href="mailto:contato@bluedigitalhub.com.br"
                        class="text-[#0c46e6] font-bold">contato@bluedigitalhub.com.br</a>.</p>
            </section>

        </article>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>
</body>

</html>