<?php
/* ============================================================
   KUTUNGA DIGITAL — SERVICOS.PHP
   Página de serviços detalhada com todos os 9 serviços
   ============================================================ */

$page_title       = 'Serviços';
$page_description = 'Conheça todos os serviços da Kutunga Digital: sites, apps, marketing, automação, social media, e-commerce e muito mais. Cada serviço é uma alavanca de crescimento.';
$page_current     = 'servicos.php';

function img(string $filename): string {
    return 'imagens%20importantes/' . rawurlencode($filename);
}

$wa_link    = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero saber mais sobre os serviços da Kutunga Digital.');
$wa_proposta = 'https://wa.me/244935043421?text=' . rawurlencode('Quero receber uma proposta personalizada da Kutunga Digital.');

include 'includes/header.php';

$services = [
  [
    'label'    => 'Presença Digital',
    'title'    => 'Sites Institucionais que Vendem',
    'img'      => '⚙️ 3. KUTUNGA GROWTH SYSTEM (solução real) - illustrationImage.png',
    'img_alt'  => 'Criação de sites institucionais',
    'desc'     => 'Um site não é um cartão de visita digital. É a sua melhor ferramenta de vendas. Construímos presença online que trabalha por si a qualquer hora — com design premium, velocidade máxima e estrutura pensada para converter visitantes em clientes.',
    'benefits' => ['Design premium e moderno alinhado com a sua marca', 'Optimizado para motores de busca (SEO)', 'Carregamento ultra rápido em qualquer dispositivo', 'Formulários e integrações de conversão'],
    'flip'     => false,
  ],
  [
    'label'    => 'Desenvolvimento',
    'title'    => 'Apps Mobile & Web',
    'img'      => '📱 5. APPS MOBILE E WEB - illustrationImage.png',
    'img_alt'  => 'Desenvolvimento de aplicações mobile e web',
    'desc'     => 'As aplicações são o futuro dos negócios — e o futuro é agora. Desenvolvemos apps nativas e web apps que funcionam onde os seus clientes estão, com experiência de utilizador premium e funcionalidades que criam fidelização.',
    'benefits' => ['Apps para iOS e Android nativas', 'Progressive Web Apps (PWA)', 'Integração com sistemas existentes', 'Interface intuitiva que os clientes adoram usar'],
    'flip'     => true,
  ],
  [
    'label'    => 'Crescimento',
    'title'    => 'Marketing & Tráfego Pago',
    'img'      => '📢 6. MARKETING E TRÁFEGO PAGO - illustrationImage.png',
    'img_alt'  => 'Marketing digital e tráfego pago',
    'desc'     => 'Para de desperdiçar dinheiro em anúncios sem estratégia. Criamos campanhas de performance no Meta Ads, Google Ads e plataformas relevantes com targeting preciso — levando os seus anúncios exactamente à frente de quem está pronto para comprar.',
    'benefits' => ['Campanhas no Meta Ads, Google Ads, TikTok Ads', 'Targeting avançado por comportamento e intenção', 'Optimização contínua para o menor custo por aquisição', 'Relatórios de resultados claros e transparentes'],
    'flip'     => false,
  ],
  [
    'label'    => 'Social Media',
    'title'    => 'Gestão de Social Media',
    'img'      => '📱 7. SOCIAL MEDIA - illustrationImage.png',
    'img_alt'  => 'Gestão de redes sociais',
    'desc'     => 'Ter seguidores não é ter clientes. Criar conteúdo sem estratégia é perder tempo. Gerimos a sua presença nas redes sociais com estratégia de conteúdo que constrói autoridade, gera engagement real e transforma seguidores em compradores.',
    'benefits' => ['Estratégia de conteúdo personalizada por plataforma', 'Produção de conteúdo visual e escrito', 'Gestão de comentários e comunidade', 'Análise de métricas e optimização mensal'],
    'flip'     => true,
  ],
  [
    'label'    => 'Tecnologia',
    'title'    => 'Plataformas Digitais',
    'img'      => '🧩 8. PLATAFORMAS DIGITAIS - illustrationImage.png',
    'img_alt'  => 'Desenvolvimento de plataformas digitais',
    'desc'     => 'O seu negócio precisa de um sistema que o suporte à medida que cresce. Desenvolvemos plataformas web sob medida — portais de clientes, sistemas de gestão, marketplaces e soluções complexas que organizam e escalam a sua operação.',
    'benefits' => ['Plataformas web à medida do seu negócio', 'Sistemas de gestão internos', 'Portais de clientes e parceiros', 'Integrações com APIs e sistemas externos'],
    'flip'     => false,
  ],
  [
    'label'    => 'Automação',
    'title'    => 'Automação de Negócios',
    'img'      => '⚙️ 9. AUTOMAÇÃO DE NEGÓCIOS - illustrationImage.png',
    'img_alt'  => 'Automação de processos de negócio',
    'desc'     => 'O negócio que depende de si é o negócio que não escala. Mapeamos os seus processos e criamos fluxos automáticos que eliminam tarefas manuais, reduzem erros e liberam a sua equipa para o que realmente importa: crescer.',
    'benefits' => ['Automação de follow-up e atendimento', 'Fluxos de CRM e pipeline de vendas', 'Integração de WhatsApp, email e sistemas', 'Relatórios e alertas automáticos'],
    'flip'     => true,
  ],
  [
    'label'    => 'Comércio Digital',
    'title'    => 'E-commerce',
    'img'      => '🛒 10. E-COMMERCE - illustrationImage.png',
    'img_alt'  => 'Desenvolvimento de e-commerce',
    'desc'     => 'A sua loja física tem horário. A loja online não. Construímos e-commerces de alta conversão com experiência de compra premium, checkout optimizado e integrações de pagamento — para vender mais, a mais pessoas, sem esforço adicional.',
    'benefits' => ['Design focado em conversão e vendas', 'Gestão de inventário e stock', 'Checkout optimizado e múltiplos pagamentos', 'Relatórios de vendas e comportamento de clientes'],
    'flip'     => false,
  ],
  [
    'label'    => 'Criatividade',
    'title'    => 'Criativos Publicitários',
    'img'      => '🎨 11. CRIATIVOS PUBLICITÁRIOS - illustrationImage.png',
    'img_alt'  => 'Criativos publicitários e design',
    'desc'     => 'Num feed cheio de conteúdo mediano, o design é a diferença entre ser ignorado e ser clicado. Criamos peças visuais que param o scroll, comunicam o valor da sua oferta em segundos e levam ao clique — para anúncios, redes sociais e campanhas.',
    'benefits' => ['Banners e criativos para Meta Ads e Google', 'Vídeos curtos e Reels para redes sociais', 'Identidade visual consistente e premium', 'A/B testing de criativos para maximizar performance'],
    'flip'     => true,
  ],
  [
    'label'    => 'Performance',
    'title'    => 'Campanhas de Anúncios',
    'img'      => '📢 6. MARKETING E TRÁFEGO PAGO - illustrationImage.png',
    'img_alt'  => 'Campanhas de anúncios digitais',
    'desc'     => 'Investir em anúncios sem estratégia é queimar dinheiro. Gerimos campanhas completas com copywriting, criativos, segmentação e optimização contínua — do lançamento ao relatório de resultados. Cada euro investido tem de gerar retorno mensurável.',
    'benefits' => ['Gestão completa de campanhas pagas', 'Copywriting persuasivo de alto impacto', 'Optimização diária para máximo ROAS', 'Relatórios de performance semanal'],
    'flip'     => false,
  ],
];

$check_svg = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>';
?>

<!-- ══════════════════════════ PAGE HERO ══════════════════════════ -->
<main id="main-content">
<section class="page-hero" aria-labelledby="services-page-title">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container">
    <div class="page-hero-inner">
      <span class="label-tag reveal">
        <span class="label-tag-dot" aria-hidden="true"></span>
        As nossas soluções
      </span>
      <h1 class="page-hero-title reveal reveal-delay-1">
        Cada serviço é uma<br>
        <span style="color:var(--color-accent);">alavanca de crescimento</span><br>
        para o seu negócio.
      </h1>
      <p class="page-hero-subtitle reveal reveal-delay-2">
        Não vendemos serviços isolados. Construímos sistemas integrados que funcionam
        em conjunto para trazer resultados reais e previsíveis ao seu negócio.
      </p>
      <div class="reveal reveal-delay-3">
        <a href="<?= $wa_proposta ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="servicesHeroCta">
          Quero uma proposta personalizada
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════ LISTA COMPLETA DE SERVIÇOS ════════════════════ -->
<section class="section section-dark" aria-label="Lista de serviços">
  <div class="container">
    <div class="services-list">

      <?php foreach ($services as $i => $svc): ?>
      <article class="svc-item <?= $svc['flip'] ? 'flip' : '' ?> reveal" id="servico-<?= $i + 1 ?>">

        <div class="svc-item-image">
          <img src="<?= img($svc['img']) ?>"
               alt="<?= htmlspecialchars($svc['img_alt']) ?>"
               loading="lazy"
               width="580" height="340">
        </div>

        <div class="svc-item-content">
          <span class="label-tag" style="margin-bottom:16px;">
            <span class="label-tag-dot" aria-hidden="true"></span>
            <?= htmlspecialchars($svc['label']) ?>
          </span>

          <h2 class="svc-item-title"><?= htmlspecialchars($svc['title']) ?></h2>

          <p class="svc-item-desc"><?= htmlspecialchars($svc['desc']) ?></p>

          <?php if (!empty($svc['benefits'])): ?>
          <ul class="svc-benefits" aria-label="Benefícios de <?= htmlspecialchars($svc['title']) ?>">
            <?php foreach ($svc['benefits'] as $b): ?>
            <li class="svc-benefit">
              <span class="check-circle" aria-hidden="true"><?= $check_svg ?></span>
              <?= htmlspecialchars($b) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
             class="btn btn-primary" id="svcCta<?= $i + 1 ?>">
            Quero este serviço
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </div>

      </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ═══════════════════════ STATS BAND ═══════════════════════ -->
<section class="stats-band" aria-label="Resultados Kutunga Digital">
  <div class="container">
    <div class="stats-grid" role="list">
      <div class="stat-cell reveal" role="listitem">
        <div class="stat-number">+<span data-count="50">50</span></div>
        <p class="stat-label">Negócios Transformados</p>
      </div>
      <div class="stat-cell reveal reveal-delay-2" role="listitem">
        <div class="stat-number"><span data-count="9" data-suffix="+">9+</span></div>
        <p class="stat-label">Serviços Especializados</p>
      </div>
      <div class="stat-cell reveal reveal-delay-3" role="listitem">
        <div class="stat-number"><span data-count="98" data-suffix="%">98%</span></div>
        <p class="stat-label">Taxa de Satisfação</p>
      </div>
      <div class="stat-cell reveal reveal-delay-4" role="listitem">
        <div class="stat-number">+<span data-count="200" data-suffix="%">200%</span></div>
        <p class="stat-label">Crescimento Médio</p>
      </div>
    </div>
  </div>
</section>


<!-- ═════════════════════════ CTA FINAL ═════════════════════════ -->
<section class="cta-section" id="cta-servicos" aria-labelledby="svc-cta-title">
  <div class="container">
    <div class="cta-card reveal">
      <span class="label-tag" style="margin-bottom:24px;">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Próximo passo
      </span>
      <h2 class="section-title" id="svc-cta-title">
        Pronto para implementar<br>
        o <span style="color:var(--color-accent);">sistema certo</span><br>
        no seu negócio?
      </h2>
      <p class="section-subtitle">
        Fale connosco hoje. Sem compromisso, sem letras miúdas.
        Em 30 minutos percebemos o seu negócio e apresentamos o plano ideal.
      </p>
      <div class="cta-actions">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="svcsCtaWa">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
          </svg>
          Quero implementar no meu negócio
        </a>
        <a href="contacto.php" class="btn btn-secondary btn-lg" id="svcsCtaForm">
          Receber proposta por email
        </a>
      </div>
    </div>
  </div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
