<?php
$css_folder = "assets/css";
$modules_folder = "modules";
$uri = $_SERVER["REQUEST_URI"];

// Informações do Head
$website_title          = "#";
$website_name           = "#";
$website_description    = "#";
$website_keywords       = "#";
$website_author         = "#";
$website_url            = "localhost:8000";

// Configurações de Email

if($uri == "mail_configuration.php") {
    $host           = "#";                       // Host SMTP
    $host_username  = "#";                       // Email do Host
    $host_password  = "#";                       // Senha do Host

    $mail_form      = $_GET["email"];
    $name_form      = $_GET["name"];
    $phone_number   = $_GET["phone-number"];
    $message        = $_GET["message"];
    $subject        = "#";                       // Assunto do Email
    $date           = date("d/m/Y H:i:s");      // Data de Envio
    $ip             = $_SERVER['REMOTE_ADDR'];  // IP do Usuário
    $receiver       = "#";                       // Pessoa que Recebe o Email
}

// CSS usados no website
// Obs.: se quiser usar CSS especifico em alguma página
// Pode fazer aqui mesmo a função PHP
$website_stylesheets = [
    $css_folder."/components.css",
    $css_folder."/main.css",
    $css_folder."/slider.css",
    $modules_folder."/TinySlider/dist/tiny-slider.css"
];

?>
