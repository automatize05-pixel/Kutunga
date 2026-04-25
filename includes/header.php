<?php
/* ============================================================
   KUTUNGA DIGITAL — HEADER.PHP
   Navbar + HTML head (reutilizável em todas as páginas)
   Variáveis esperadas: $page_title, $page_description, $page_current
   ============================================================ */

$wa_link = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero saber mais sobre os serviços da Kutunga Digital.');
$current = $page_current ?? basename($_SERVER['PHP_SELF']);

// SVG Helper
function icon(string $name): string {
    $icons = [
        'whatsapp' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>',
        'menu'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>',
        'arrow-right' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>',
        'chevron-down' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>',
    ];
    return $icons[$name] ?? '';
}
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' | Kutunga Digital' : 'Kutunga Digital — Sistemas que fazem negócios crescer' ?></title>
  <meta name="description" content="<?= isset($page_description) ? htmlspecialchars($page_description) : 'A Kutunga Digital constrói sistemas digitais completos que fazem negócios vender, automatizar e escalar todos os dias.' ?>">

  <meta property="og:type" content="website">
  <meta property="og:title" content="Kutunga Digital">
  <meta property="og:description" content="<?= isset($page_description) ? htmlspecialchars($page_description) : 'Sistemas que fazem negócios crescer.' ?>">
  <meta property="og:locale" content="pt_AO">

  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#0A0A0A">
  <meta name="author" content="Kutunga Digital">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ═══════════════════════════════════ NAVBAR ═══════════════════════════════════ -->
<nav class="navbar" id="navbar" aria-label="Navegação principal">
  <div class="container">
    <div class="navbar-inner">

      <a href="index.php" class="navbar-logo" aria-label="Kutunga Digital - Início">
        Kutunga<span class="dot">.</span>Digital
      </a>

      <ul class="navbar-nav" role="list">
        <li><a href="index.php"    class="<?= $current === 'index.php'    ? 'active' : '' ?>">Home</a></li>
        <li><a href="servicos.php" class="<?= $current === 'servicos.php' ? 'active' : '' ?>">Serviços</a></li>
        <li><a href="sobre.php"    class="<?= $current === 'sobre.php'    ? 'active' : '' ?>">Sobre</a></li>
        <li><a href="contacto.php" class="<?= $current === 'contacto.php' ? 'active' : '' ?>">Contacto</a></li>
      </ul>

      <div class="navbar-actions">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary" id="navCtaBtn">
          <?= icon('whatsapp') ?>
          Falar Connosco
        </a>
      </div>

      <button class="hamburger" id="hamburger"
              aria-label="Abrir menu" aria-expanded="false" aria-controls="mobileMenu">
        <span></span><span></span><span></span>
      </button>

    </div>

    <!-- Mobile Menu -->
    <nav class="mobile-menu" id="mobileMenu" aria-label="Menu mobile">
      <a href="index.php"    class="<?= $current === 'index.php'    ? 'active' : '' ?>">Home</a>
      <a href="servicos.php" class="<?= $current === 'servicos.php' ? 'active' : '' ?>">Serviços</a>
      <a href="sobre.php"    class="<?= $current === 'sobre.php'    ? 'active' : '' ?>">Sobre</a>
      <a href="contacto.php" class="<?= $current === 'contacto.php' ? 'active' : '' ?>">Contacto</a>
      <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
         class="btn btn-primary" style="margin-top:8px;">
        <?= icon('whatsapp') ?>
        Falar Connosco
      </a>
    </nav>

  </div>
</nav>
