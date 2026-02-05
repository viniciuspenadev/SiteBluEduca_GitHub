<?php
/**
 * process_quiz.php - Backend Profissional para o Quiz BluEduca
 * Com SMTP da Hostinger e Proteções de Segurança
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer/Exception.php';
require 'lib/PHPMailer/PHPMailer.php';
require 'lib/PHPMailer/SMTP.php';

header('Content-Type: application/json');

// --- Segurança & Proteção de Dados ---
// Bloqueia acessos diretos
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Rate Limiting Básico (Check por Session)
session_start();
$now = time();
if (isset($_SESSION['last_submit']) && ($now - $_SESSION['last_submit'] < 30)) {
    echo json_encode(['success' => false, 'message' => 'Aguarde um momento antes de enviar novamente.']);
    exit;
}

// Recebe os dados
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Dados de formulário ausentes.']);
    exit;
}

// Carrega configurações (Prioriza Variáveis de Ambiente para Docker/Easypanel)
$config = is_file('config.php') ? require 'config.php' : [];

// Helper para obter configuração (ENV > File > Default)
function getCfg($key, $config, $default = null)
{
    if ($env = getenv($key))
        return $env;
    $parts = explode('.', $key);
    $val = $config;
    foreach ($parts as $p) {
        if (!isset($val[$p]))
            return $default;
        $val = $val[$p];
    }
    return $val;
}

// Sanitização Rigorosa
$nome = htmlspecialchars(strip_tags(trim($data['nome'] ?? '')), ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars(strip_tags(trim($data['phone'] ?? '')), ENT_QUOTES, 'UTF-8');
$desafio = htmlspecialchars(strip_tags(trim($data['q1'] ?? 'Não informado')), ENT_QUOTES, 'UTF-8');
$tamanho_escola = htmlspecialchars(strip_tags(trim($data['q2'] ?? 'Não informado')), ENT_QUOTES, 'UTF-8');

// Validação de e-mail (O admin receberá o lead)
// $to_email = 'contato@bluedigitalhub.com.br'; // Ajuste aqui o e-mail que receberá os leads - REMOVIDO

if (empty($nome) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, preencha nome e telefone.']);
    exit;
}

// --- Configuração SMTP Profissional ---
$mail = new PHPMailer(true);

try {
    // Configurações do Servidor
    $mail->isSMTP();
    $mail->Host = getCfg('SMTP_HOST', $config, 'smtp.hostinger.com');
    $mail->SMTPAuth = true;
    $mail->Username = getCfg('SMTP_USER', $config);
    $mail->Password = getCfg('SMTP_PASS', $config);
    $secure = getCfg('SMTP_SECURE', $config, 'ssl');
    $mail->SMTPSecure = ($secure === 'ssl') ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = getCfg('SMTP_PORT', $config, 465);
    $mail->CharSet = 'UTF-8';

    // Remetente e Destinatário
    $from_email = getCfg('SMTP_FROM_EMAIL', $config, $mail->Username);
    $from_name = getCfg('SMTP_FROM_NAME', $config, 'Sistema BluEduca');
    $leads_to = getCfg('LEADS_TO', $config);

    $mail->setFrom($from_email, $from_name);
    $mail->addAddress($leads_to);
    $mail->addReplyTo($from_email, 'Suporte BluEduca');

    // Conteúdo do E-mail (Template Premium)
    $mail->isHTML(true);
    $mail->Subject = "🚀 [LEAD] Diagnóstico Escolar: $nome";

    // Template com CSS Inline para Extrema Compatibilidade
    $mailContent = "
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f3f4f6; }
            .wrapper { width: 100%; background-color: #f3f4f6; padding: 40px 0; }
            .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.05); }
            .header { background: linear-gradient(135deg, #0c46e6 0%, #00d2ff 100%); padding: 50px 40px; text-align: center; }
            .header img { height: 45px; }
            .body { padding: 40px; color: #1f2937; }
            .headline { font-size: 24px; font-weight: 800; color: #111827; margin-bottom: 8px; }
            .subheadline { font-size: 16px; color: #6b7280; margin-bottom: 32px; }
            .bento-card { background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 20px; padding: 24px; margin-bottom: 16px; }
            .label { font-size: 10px; font-weight: 800; color: #0c46e6; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 4px; }
            .value { font-size: 18px; font-weight: 700; color: #111827; }
            .footer { background-color: #f9fafb; padding: 32px; text-align: center; border-top: 1px solid #f3f4f6; }
            .footer p { font-size: 12px; color: #9ca3af; margin: 0; }
            .cta-button { display: inline-block; background-color: #0c46e6; color: #ffffff !important; padding: 18px 36px; border-radius: 100px; font-weight: 700; text-decoration: none; margin-top: 24px; box-shadow: 0 10px 20px rgba(12, 70, 230, 0.2); }
        </style>
    </head>
    <body>
        <div class='wrapper'>
            <div class='container'>
                <div class='header'>
                    <img src='https://blueduca.com.br/assets/img/logo_completo.png' alt='BluEduca Logo'>
                </div>
                <div class='body'>
                    <h1 class='headline'>Novo Lead Qualificado! 🎯</h1>
                    <p class='subheadline'>Um gestor acabou de realizar o diagnóstico e aguarda contato.</p>
                    
                    <div class='bento-card'>
                        <div class='label'>Gestor</div>
                        <div class='value'>$nome</div>
                    </div>
                    
                    <div class='bento-card'>
                        <div class='label'>WhatsApp / Contato</div>
                        <div class='value'>$phone</div>
                    </div>

                    <div class='bento-card' style='background-color: #eff6ff; border-color: #dbeafe;'>
                        <div class='label'>Principal Desafio</div>
                        <div class='value' style='color: #1d4ed8;'>$desafio</div>
                    </div>

                    <div class='bento-card' style='background-color: #f0fdf4; border-color: #dcfce7;'>
                        <div class='label'>Tamanho da Escola</div>
                        <div class='value' style='color: #15803d;'>$tamanho_escola alunos</div>
                    </div>

                    <div style='text-align: center;'>
                        <a href='https://wa.me/55" . preg_replace('/\D/', '', $phone) . "' class='cta-button'>Atender via WhatsApp</a>
                    </div>
                </div>
                <div class='footer'>
                    <p>&copy; " . date('Y') . " BluEduca - Gestão Escolar Inteligente.<br>Confidencial e Protegido.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";

    $mail->Body = $mailContent;
    $mail->AltBody = "Novo Lead: $nome | Fone: $phone | Desafio: $desafio | Escola: $tamanho_escola";

    $mail->send();

    // Sucesso
    $_SESSION['last_submit'] = time();
    echo json_encode(['success' => true]);

} catch (Exception $e) {
    // Erro detalhado no log, mensagem genérica para o usuário
    error_log("Erro PHPMailer: {$mail->ErrorInfo}");
    echo json_encode(['success' => false, 'message' => 'Erro técnico ao processar.']);
}
