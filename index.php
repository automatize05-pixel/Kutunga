<?php
/* ============================================================
   KUTUNGA DIGITAL — INDEX.PHP (HOME)
   Máquina de alta conversão
   ============================================================ */

$page_title       = 'Sistema de Crescimento Digital';
$page_description = 'A Kutunga Digital constrói sistemas digitais que fazem negócios vender, automatizar e escalar todos os dias. Conheça o Kutunga Growth System.';
$page_current     = 'index.php';

// Image URL helper
function img(string $filename): string {
    return 'imagens%20importantes/' . rawurlencode($filename);
}

$wa_link = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero saber mais sobre os serviços da Kutunga Digital.');
$wa_system = 'https://wa.me/244935043421?text=' . rawurlencode('Quero implementar o Kutunga Growth System no meu negócio!');
$wa_proposta = 'https://wa.me/244935043421?text=' . rawurlencode('Quero receber uma proposta personalizada da Kutunga Digital.');

include 'includes/header.php';
?>

<!-- ═══════════════════════════ HERO SECTION ═══════════════════════════ -->
<main id="main-content">
<section class="hero" id="hero" aria-label="Hero principal">
  <div class="hero-bg-gradient" aria-hidden="true"></div>
  <div class="hero-grid-pattern" aria-hidden="true"></div>

  <div class="hero-inner">

    <!-- LEFT: Texto + Botões -->
    <div class="hero-left">

      <div class="hero-badge reveal">
        <span class="hero-badge-dot" aria-hidden="true"></span>
        Sistema activo e a gerar resultados 24h/dia
      </div>

      <h1 class="hero-title reveal reveal-delay-1">
        Se o seu negócio não está
        a crescer, o problema
        não é o mercado.
        É o <span class="accent">sistema</span> que usa.
      </h1>

      <p class="hero-subtitle reveal reveal-delay-2">
        A Kutunga Digital constrói sistemas digitais completos que fazem
        negócios vender, automatizar e escalar — todos os dias, sem esforço manual.
      </p>

      <div class="hero-actions reveal reveal-delay-3">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="heroCtaMain">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
          </svg>
          Falar connosco no WhatsApp
        </a>
        <a href="#growth-system" class="btn btn-secondary btn-lg" id="heroCtaSecondary">
          Ver o Growth System
        </a>
      </div>

      <div class="hero-divider" aria-hidden="true"></div>

      <div class="hero-stats reveal reveal-delay-4" aria-label="Números da Kutunga Digital">
        <div class="hero-stat">
          <span class="hero-stat-number">+<span data-count="50">50</span></span>
          <span class="hero-stat-label">Negócios transformados</span>
        </div>
        <div class="hero-stat">
          <span class="hero-stat-number">+<span data-count="3">3</span></span>
          <span class="hero-stat-label">Anos de mercado</span>
        </div>
        <div class="hero-stat">
          <span class="hero-stat-number"><span data-count="98" data-suffix="%">98%</span></span>
          <span class="hero-stat-label">Taxa de satisfação</span>
        </div>
      </div>

    </div><!-- /hero-left -->

    <!-- RIGHT: Imagem ilustração -->
    <div class="hero-right reveal reveal-delay-2">
      <div class="hero-img-wrap">
        <div class="hero-img-glow" aria-hidden="true"></div>
        <img class="hero-img"
             src="<?= img('⚙️ 3. KUTUNGA GROWTH SYSTEM (solução real) - illustrationImage.png') ?>"
             alt="Kutunga Growth System — sistema digital de crescimento"
             width="580" height="440"
             loading="eager">
      </div>
    </div><!-- /hero-right -->

  </div><!-- /hero-inner -->
</section>



<!-- ═══════════════════════ PROBLEMA SECTION ═══════════════════════ -->
<section class="section section-surface" id="problema" aria-labelledby="problema-title">
  <div class="container">
    <div class="problem-grid">

      <div class="reveal">
        <div class="problem-image-wrap">
          <div class="problem-image-glow" aria-hidden="true"></div>
          <img src="<?= img('⚠️ 2. PROBLEMA (negócio sem sistema) - illustrationImage.png') ?>"
               alt="Negócio sem sistema digital — problema que a Kutunga Digital resolve"
               width="600" height="500"
               loading="lazy">
        </div>
      </div>

      <div class="problem-content reveal reveal-delay-2">
        <span class="label-tag">
          <span class="label-tag-dot" aria-hidden="true"></span>
          O problema real
        </span>
        <h2 class="section-title" id="problema-title">
          O seu negócio está a<br>
          <span class="accent">perder dinheiro</span><br>
          todos os dias.
        </h2>
        <p class="section-subtitle">
          Não porque o mercado está difícil. Mas porque não tem o sistema certo a trabalhar por si.
        </p>

        <div class="pain-cards" role="list">

          <article class="pain-card" role="listitem">
            <div class="pain-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
              </svg>
            </div>
            <div class="pain-text">
              <h4>Vendas inconsistentes</h4>
              <p>Uns meses bons, outros maus. Sem previsibilidade, sem controlo.</p>
            </div>
          </article>

          <article class="pain-card" role="listitem">
            <div class="pain-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/>
              </svg>
            </div>
            <div class="pain-text">
              <h4>Dependência das redes sociais</h4>
              <p>Publica todos os dias, gasta energia mas não tem sistema de vendas.</p>
            </div>
          </article>

          <article class="pain-card" role="listitem">
            <div class="pain-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
              </svg>
            </div>
            <div class="pain-text">
              <h4>Negócio sem automação</h4>
              <p>Cada venda depende de si. O negócio para quando você para.</p>
            </div>
          </article>

          <article class="pain-card" role="listitem">
            <div class="pain-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>
              </svg>
            </div>
            <div class="pain-text">
              <h4>Dinheiro desperdiçado em anúncios</h4>
              <p>Investe em publicidade sem estratégia e não vê retorno.</p>
            </div>
          </article>

        </div>

        <blockquote class="problem-statement">
          "Enquanto tenta vender manualmente, outros negócios já estão automatizados e a escalar diariamente."
        </blockquote>
      </div>

    </div>
  </div>
</section>


<!-- ═════════════════════ SOLUÇÃO — GROWTH SYSTEM ═════════════════════ -->
<section class="section section-dark" id="growth-system" aria-labelledby="solution-title">
  <div class="container">
    <div class="solution-grid">

      <div class="solution-content reveal">
        <span class="label-tag">
          <span class="label-tag-dot" aria-hidden="true"></span>
          A solução
        </span>
        <h2 class="section-title" id="solution-title">
          O <span class="accent">Kutunga</span><br>
          Growth System
        </h2>
        <p class="section-subtitle">
          O Kutunga Growth System é a infraestrutura digital que transforma negócios
          comuns em máquinas de crescimento previsível — com leads, vendas e automação funcionando 24h.
        </p>

        <div class="solution-pillars" aria-label="Pilares do sistema">
          <div class="pillar">
            <div class="pillar-num">01</div>
            <span class="pillar-label">Presença Digital Profissional (Site + App)</span>
            <div class="pillar-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-num">02</div>
            <span class="pillar-label">Geração Automática de Leads e Clientes</span>
            <div class="pillar-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-num">03</div>
            <span class="pillar-label">Automação de Vendas e Atendimento</span>
            <div class="pillar-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-num">04</div>
            <span class="pillar-label">Escala Previsível com Anúncios Estratégicos</span>
          </div>
        </div>

        <a href="<?= $wa_system ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="solutionCta" style="margin-top:8px;">
          Quero implementar no meu negócio
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>
      </div>

      <div class="reveal reveal-delay-2">
        <div class="solution-image-wrap">
          <div class="solution-image-glow" aria-hidden="true"></div>
          <img src="<?= img('⚙️ 3. KUTUNGA GROWTH SYSTEM (solução real) - illustrationImage.png') ?>"
               alt="Kutunga Growth System — infraestrutura digital de crescimento"
               width="600" height="500"
               loading="lazy">
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════ SERVIÇOS — CARROSSEL ═══════════════════════ -->
<section class="section section-surface carousel-section" id="servicos-preview" aria-labelledby="services-title">
  <div class="container">

    <div class="carousel-header">
      <div class="reveal">
        <span class="label-tag">
          <span class="label-tag-dot" aria-hidden="true"></span>
          O que fazemos
        </span>
        <h2 class="section-title" id="services-title">
          Cada serviço é uma<br>
          <span class="accent">alavanca de crescimento</span>
        </h2>
      </div>
      <div class="carousel-arrows reveal reveal-delay-2">
        <button class="carousel-arrow" id="carouselPrev" aria-label="Serviço anterior">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
          </svg>
        </button>
        <button class="carousel-arrow" id="carouselNext" aria-label="Próximo serviço">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>

    <div class="carousel-viewport" id="carouselViewport">
      <div class="carousel-track" id="carouselTrack" role="list">

        <?php
        $services = [
          [
            'img'   => '⚙️ 3. KUTUNGA GROWTH SYSTEM (solução real) - illustrationImage.png',
            'title' => 'Sites Institucionais',
            'desc'  => 'Sites que vendem por si. Design premium, carregamento rápido e estrutura optimizada para converter visitantes em clientes.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>',
          ],
          [
            'img'   => '📱 5. APPS MOBILE E WEB - illustrationImage.png',
            'title' => 'Apps Mobile & Web',
            'desc'  => 'Aplicações que funcionam onde os seus clientes estão — no telemóvel, no computador, em qualquer dispositivo.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
          ],
          [
            'img'   => '📢 6. MARKETING E TRÁFEGO PAGO - illustrationImage.png',
            'title' => 'Marketing & Tráfego Pago',
            'desc'  => 'Estratégias de aquisição que trazem clientes qualificados prontos para comprar, com o menor custo por lead possível.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
          ],
          [
            'img'   => '📱 7. SOCIAL MEDIA - illustrationImage.png',
            'title' => 'Gestão de Social Media',
            'desc'  => 'Presença consistente e estratégica nas redes sociais que constrói autoridade e converte seguidores em clientes.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>',
          ],
          [
            'img'   => '🧩 8. PLATAFORMAS DIGITAIS - illustrationImage.png',
            'title' => 'Plataformas Digitais',
            'desc'  => 'Sistemas web complexos, portais e plataformas personalizadas que automatizam e organizam o seu negócio.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
          ],
          [
            'img'   => '⚙️ 9. AUTOMAÇÃO DE NEGÓCIOS - illustrationImage.png',
            'title' => 'Automação de Negócios',
            'desc'  => 'Eliminamos tarefas repetitivas e criamos fluxos automáticos que fazem o trabalho por si — 24 horas por dia.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>',
          ],
          [
            'img'   => '🛒 10. E-COMMERCE - illustrationImage.png',
            'title' => 'E-commerce',
            'desc'  => 'Lojas online de alta conversão que vendem a qualquer hora, para qualquer pessoa, com experiência de compra premium.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>',
          ],
          [
            'img'   => '🎨 11. CRIATIVOS PUBLICITÁRIOS - illustrationImage.png',
            'title' => 'Criativos Publicitários',
            'desc'  => 'Peças visuais que param o scroll, comunicam valor e convertem — para anúncios, redes sociais e campanhas.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>',
          ],
          [
            'img'   => '📢 6. MARKETING E TRÁFEGO PAGO - illustrationImage.png',
            'title' => 'Campanhas de Anúncios',
            'desc'  => 'Campanhas no Meta, Google e YouTube optimizadas para resultados reais — mais cliques, mais leads, mais vendas.',
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/></svg>',
          ],
        ];

        foreach ($services as $s): ?>
        <article class="svc-card" role="listitem">
          <img class="svc-card-img"
               src="<?= img($s['img']) ?>"
               alt="<?= htmlspecialchars($s['title']) ?> — Kutunga Digital"
               loading="lazy"
               width="400" height="200">
          <div class="svc-card-body">
            <div class="svc-card-icon" aria-hidden="true">
              <?= $s['icon'] ?>
            </div>
            <h3 class="svc-card-title"><?= htmlspecialchars($s['title']) ?></h3>
            <p class="svc-card-desc"><?= htmlspecialchars($s['desc']) ?></p>
          </div>
        </article>
        <?php endforeach; ?>

      </div><!-- /carousel-track -->
    </div><!-- /carousel-viewport -->

    <div class="carousel-footer reveal">
      <div class="carousel-dots" id="carouselDots" role="tablist" aria-label="Navegação do carrossel"></div>
      <a href="servicos.php" class="btn btn-accent-outline" id="seeAllServices">
        Ver todos os serviços
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

  </div>
</section>


<!-- ═══════════════════════ PROVA SOCIAL — STATS ═══════════════════════ -->
<section class="stats-band" id="resultados" aria-label="Resultados da Kutunga Digital">
  <div class="container">
    <div class="stats-grid" role="list">

      <div class="stat-cell reveal" role="listitem">
        <div class="stat-number">
          +<span data-count="50">50</span>
        </div>
        <p class="stat-label">Negócios<br>Transformados</p>
      </div>

      <div class="stat-cell reveal reveal-delay-2" role="listitem">
        <div class="stat-number">
          +<span data-count="200" data-suffix="%">200%</span>
        </div>
        <p class="stat-label">Crescimento Médio<br>dos Clientes</p>
      </div>

      <div class="stat-cell reveal reveal-delay-3" role="listitem">
        <div class="stat-number">
          <span data-count="98" data-suffix="%">98%</span>
        </div>
        <p class="stat-label">Taxa de<br>Satisfação</p>
      </div>

      <div class="stat-cell reveal reveal-delay-4" role="listitem">
        <div class="stat-number">
          <span data-count="24" data-suffix="h">24h</span>
        </div>
        <p class="stat-label">Sistemas a Trabalhar<br>por Dia</p>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════ TESTEMUNHOS REAIS ═══════════════════════ -->
<section class="section section-surface" id="testemunhos" aria-labelledby="testimonials-title">
  <div class="container">

    <div class="section-header center reveal">
      <span class="label-tag">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Provas reais
      </span>
      <h2 class="section-title" id="testimonials-title">
        Não criamos websites.<br>
        Criamos <span class="accent">sistemas de crescimento.</span>
      </h2>
      <p class="section-subtitle">O que os nossos clientes dizem depois de implementar o sistema.</p>
    </div>

    <div class="testimonials-grid" role="list">

      <?php
      $testimonials = [
        [
          'initial' => 'M',
          'name'    => 'Miguel Fernandes',
          'company' => 'CEO — FernandesTech',
          'text'    => '"Antes da Kutunga perdíamos clientes todos os dias por não ter um sistema. Hoje vendemos automaticamente 24 horas por dia e o faturamento triplicou em menos de 6 meses."',
        ],
        [
          'initial' => 'C',
          'name'    => 'Carla Neto',
          'company' => 'Directora — Moda Luanda',
          'text'    => '"O nosso e-commerce que a Kutunga construiu gerou mais de 240% de crescimento em 4 meses. Nunca pensei que um sistema digital pudesse fazer tanto em tão pouco tempo."',
        ],
        [
          'initial' => 'P',
          'name'    => 'Paulo Augusto',
          'company' => 'Fundador — StartupAO',
          'text'    => '"A automação que implementaram eliminou 80% do trabalho manual da nossa equipa. Agora podemos focar exclusivamente em crescer. A decisão mais inteligente que tomei."',
        ],
        [
          'initial' => 'A',
          'name'    => 'Ana Monteiro',
          'company' => 'CEO — GreenBusiness Angola',
          'text'    => '"Investimos na Kutunga e recuperámos o investimento completo em menos de 60 dias. Os anúncios estratégicos trouxeram um fluxo constante de clientes qualificados."',
        ],
        [
          'initial' => 'J',
          'name'    => 'João Carlos',
          'company' => 'Director — JC Consultores',
          'text'    => '"O site que construíram não é apenas bonito — é uma máquina de vendas. Recebo leads qualificados todos os dias sem precisar de fazer nada. Isso é o que chamo de sistema."',
        ],
        [
          'initial' => 'S',
          'name'    => 'Sandra Lima',
          'company' => 'Administradora — Clinica VidaSaude',
          'text'    => '"Profissionalismo total. Entregaram em tempo recorde, o resultado superou todas as expectativas e o suporte pós-entrega é excelente. Recomendo sem hesitar."',
        ],
      ];

      $star_svg = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
      $quote_svg = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1zm12 0c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>';

      foreach ($testimonials as $t): ?>
      <article class="testimonial-card reveal" role="listitem">
        <div class="testimonial-quote-mark" aria-hidden="true"><?= $quote_svg ?></div>
        <div class="testimonial-stars" aria-label="5 estrelas">
          <?= str_repeat($star_svg, 5) ?>
        </div>
        <p class="testimonial-text"><?= htmlspecialchars($t['text']) ?></p>
        <footer class="testimonial-author">
          <div class="testimonial-avatar" aria-hidden="true"><?= $t['initial'] ?></div>
          <div>
            <p class="testimonial-name"><?= htmlspecialchars($t['name']) ?></p>
            <p class="testimonial-company"><?= htmlspecialchars($t['company']) ?></p>
          </div>
        </footer>
      </article>
      <?php endforeach; ?>

    </div>

  </div>
</section>


<!-- ═════════════════════════ CTA FINAL ═════════════════════════ -->
<section class="cta-section" id="cta-final" aria-labelledby="cta-title">
  <div class="container">
    <div class="cta-card reveal">
      <span class="label-tag" style="margin-bottom:24px;">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Decisão inteligente
      </span>
      <h2 class="section-title" id="cta-title">
        O seu negócio não precisa<br>
        de mais esforço.<br>
        Precisa de <span class="accent">sistema.</span>
      </h2>
      <p class="section-subtitle">
        Cada dia sem sistema é um dia a perder dinheiro. Fale connosco hoje e descubra
        como podemos transformar o seu negócio em 90 dias.
      </p>
      <div class="cta-actions">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="ctaFinalWhatsapp">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
          </svg>
          Quero falar com a Kutunga agora
        </a>
        <a href="contacto.php" class="btn btn-secondary btn-lg" id="ctaFinalProposta">
          Receber proposta personalizada
        </a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
