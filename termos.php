<?php
// school-app/termos.php
$lang = 'pt';
$meta_title = "Termos de Uso | BluEduca";
$meta_desc = "Leia os Termos de Uso da BluEduca e entenda as regras de utilização da nossa plataforma de gestão escolar.";
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
    <link rel="canonical" href="https://blueduca.com.br/termos" />
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
                <span class="text-[#0c46e6] font-extrabold tracking-widest uppercase text-xs mb-3 block">Governança &
                    Direito</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">Termos de Uso</h1>
                <p class="mt-4 text-slate-500 font-medium italic">Última atualização: 04 de Fevereiro de 2026</p>
            </header>

            <section>
                <p>Ao utilizar a plataforma <strong>BluEduca</strong>, você concorda com os seguintes termos e
                    condições. Desenvolvemos nossa ferramenta para ser intuitiva e ética, e esperamos o mesmo de nossos
                    usuários.</p>

                <h2>1. Aceitação dos Termos</h2>
                <p>O acesso e uso da BluEduca implica na aceitação plena e sem reservas destes Termos de Uso. Se você
                    não concordar com algum destes pontos, não deverá utilizar a plataforma.</p>

                <h2>2. Licença de Uso</h2>
                <p>A BluEduca concede a você uma licença limitada, não exclusiva e intransferível para acessar e
                    utilizar a plataforma para fins de gestão escolar. É proibido:</p>
                <ul>
                    <li>Fazer engenharia reversa ou tentar extrair o código fonte.</li>
                    <li>Utilizar a plataforma para fins ilícitos ou abusivos.</li>
                    <li>Compartilhar credenciais de acesso com terceiros não autorizados.</li>
                </ul>

                <h2>3. Propriedade Intelectual</h2>
                <p>Todo o conteúdo, design, logotipos e tecnologia da BluEduca são de propriedade exclusiva da
                    BlueDigital Hub. O uso comercial dos nossos ativos sem autorização prévia é rigorosamente proibido.
                </p>

                <h2>4. Responsabilidades</h2>
                <p>A BluEduca se compromete em manter a plataforma disponível e segura. No entanto, o usuário é
                    responsável pela veracidade dos dados inseridos e pelo uso adequado das funcionalidades (financeiro,
                    pedagógico, comunicados).</p>

                <h2>5. Modificações</h2>
                <p>Podemos atualizar estes termos periodicamente. O uso continuado da plataforma após alterações
                    constitui aceitação dos novos termos. Recomendamos a revisão regular desta página.</p>

                <h2>6. Foro</h2>
                <p>Para dirimir quaisquer controvérsias oriundas destes termos, fica eleito o foro da comarca de São
                    Paulo/SP.</p>

                <h2>7. Contato</h2>
                <p>Para questões legais ou técnicas, fale conosco: <a href="mailto:contato@bluedigitalhub.com.br"
                        class="text-[#0c46e6] font-bold">contato@bluedigitalhub.com.br</a>.</p>
            </section>

        </article>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>lucide.createIcons();</script>
</body>

</html>