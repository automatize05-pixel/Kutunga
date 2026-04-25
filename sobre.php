<?php
/* ============================================================
   KUTUNGA DIGITAL — SOBRE.PHP
   Página Sobre com a mesma agressividade das outras
   ============================================================ */

$page_title       = 'Sobre Nós';
$page_description = 'Conhece a Kutunga Digital. Não somos uma agência. Somos o sistema que faltava no teu negócio. Descobre a nossa missão, processo e valores.';
$page_current     = 'sobre.php';

function img(string $filename): string {
    return 'imagens%20importantes/' . rawurlencode($filename);
}

$wa_link    = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero saber mais sobre os serviços da Kutunga Digital.');
$wa_proposta = 'https://wa.me/244935043421?text=' . rawurlencode('Quero receber uma proposta personalizada da Kutunga Digital.');

include 'includes/header.php';

$check_svg = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>';
$star_svg  = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
$quote_svg = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1zm12 0c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>';
?>

<!-- ══════════════════════════ PAGE HERO ══════════════════════════ -->
<main id="main-content">
<section class="page-hero" aria-labelledby="about-hero-title">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container">
    <div class="page-hero-inner">
      <span class="label-tag reveal">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Sobre a Kutunga Digital
      </span>
      <h1 class="page-hero-title reveal reveal-delay-1">
        Não somos uma agência.<br>
        Somos o <span style="color:var(--color-accent);">sistema</span><br>
        que faltava no<br>seu negócio.
      </h1>
      <p class="page-hero-subtitle reveal reveal-delay-2">
        Fundada com uma missão clara: eliminar a diferença entre negócios com sistema
        e negócios sem sistema. Em Angola e no mundo lusófono.
      </p>
      <div class="reveal reveal-delay-3" style="display:flex;gap:14px;flex-wrap:wrap;">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="aboutHeroCta">
          Falar com a equipa
        </a>
        <a href="#nosso-processo" class="btn btn-secondary btn-lg" id="aboutHeroProcess">
          Ver o nosso processo
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════ QUEM SOMOS ════════════════════ -->
<section class="section section-surface" id="quem-somos" aria-labelledby="about-who-title">
  <div class="container">
    <div class="about-intro-grid">

      <div class="about-intro-image reveal">
        <img src="<?= img('⚙️ 3. KUTUNGA GROWTH SYSTEM (solução real) - illustrationImage.png') ?>"
             alt="Kutunga Digital — equipa e sistema de crescimento"
             loading="lazy"
             width="580" height="400">
      </div>

      <div class="about-intro-text reveal reveal-delay-2">
        <span class="label-tag">
          <span class="label-tag-dot" aria-hidden="true"></span>
          Quem somos
        </span>
        <h2 class="section-title" id="about-who-title">
          Construímos sistemas.<br>
          <span style="color:var(--color-accent);">Não apenas sites.</span>
        </h2>
        <p class="section-subtitle" style="max-width:100%;margin-bottom:24px;">
          A Kutunga Digital é uma agência de tecnologia e crescimento especializada em construir
          a infraestrutura digital que os negócios precisam para escalar com previsibilidade.
        </p>
        <p class="section-subtitle" style="max-width:100%;margin-bottom:32px;">
          Sabemos que a maioria das agências vende um site e desaparece. Nós ficamos.
          Somos parceiros estratégicos que constroem sistemas completos — do primeiro clique
          à venda automatizada — e garantimos que tudo funcione.
        </p>

        <ul class="about-highlights">
          <li class="about-highlight">
            <span class="check-circle" aria-hidden="true"><?= $check_svg ?></span>
            Abordagem orientada a resultados mensuráveis
          </li>
          <li class="about-highlight">
            <span class="check-circle" aria-hidden="true"><?= $check_svg ?></span>
            Sistemas integrados, não soluções isoladas
          </li>
          <li class="about-highlight">
            <span class="check-circle" aria-hidden="true"><?= $check_svg ?></span>
            Equipa especializada em crescimento digital
          </li>
          <li class="about-highlight">
            <span class="check-circle" aria-hidden="true"><?= $check_svg ?></span>
            Transparência total em cada etapa do projecto
          </li>
          <li class="about-highlight">
            <span class="check-circle" aria-hidden="true"><?= $check_svg ?></span>
            Suporte contínuo após a entrega
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════ STATS BAND ════════════════════ -->
<section class="stats-band" aria-label="Números da Kutunga Digital">
  <div class="container">
    <div class="stats-grid" role="list">
      <div class="stat-cell reveal" role="listitem">
        <div class="stat-number">+<span data-count="50">50</span></div>
        <p class="stat-label">Negócios Transformados</p>
      </div>
      <div class="stat-cell reveal reveal-delay-2" role="listitem">
        <div class="stat-number">+<span data-count="3">3</span></div>
        <p class="stat-label">Anos de Experiência</p>
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


<!-- ════════════════════ MISSÃO & VISÃO ════════════════════ -->
<section class="section section-dark" id="missao" aria-labelledby="mission-title">
  <div class="container">
    <div class="section-header center reveal">
      <span class="label-tag">
        <span class="label-tag-dot" aria-hidden="true"></span>
        O que nos move
      </span>
      <h2 class="section-title" id="mission-title">
        Missão &amp; Visão
      </h2>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;" class="reveal reveal-delay-1">

      <div class="value-card" style="border-color:rgba(0,196,122,0.2);">
        <div class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
          </svg>
        </div>
        <h3 class="value-title">A nossa Missão</h3>
        <p class="value-desc">
          Eliminar a vantagem injusta dos grandes negócios sobre os pequenos e médios, dando
          acesso a sistemas digitais de alto desempenho que antes só as grandes empresas podiam ter.
          Queremos que qualquer negócio em Angola possa crescer com previsibilidade e sistema.
        </p>
      </div>

      <div class="value-card" style="border-color:rgba(0,196,122,0.2);">
        <div class="value-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
          </svg>
        </div>
        <h3 class="value-title">A nossa Visão</h3>
        <p class="value-desc">
          Ser a agência de tecnologia e crescimento de referência em África, reconhecida pela qualidade
          dos sistemas que entregamos e pelos resultados reais que os nossos clientes alcançam.
          Não queremos apenas clientes satisfeitos — queremos clientes que crescem.
        </p>
      </div>

    </div>

    <!-- Manifesto -->
    <div class="reveal" style="margin-top:48px;padding:48px;background:var(--color-surface);border-radius:var(--radius-xl);border:1px solid var(--color-border);text-align:center;position:relative;overflow:hidden;">
      <div style="position:absolute;top:0;left:50%;transform:translateX(-50%);width:200px;height:1px;background:linear-gradient(90deg,transparent,var(--color-accent),transparent);"></div>
      <p style="font-family:var(--font-heading);font-size:clamp(1.25rem,2.5vw,1.75rem);font-weight:700;color:var(--color-text);line-height:1.5;max-width:700px;margin:0 auto;">
        "Acreditamos que a diferença entre um negócio que cresce e um que estagna não é sorte,
        talento ou dinheiro. É <span style="color:var(--color-accent);">sistema</span>."
      </p>
      <p style="margin-top:20px;font-size:0.9rem;color:var(--color-text-muted);">— Kutunga Digital</p>
    </div>
  </div>
</section>


<!-- ════════════════════ O NOSSO PROCESSO ════════════════════ -->
<section class="section section-surface" id="nosso-processo" aria-labelledby="process-title">
  <div class="container">
    <div class="section-header center reveal">
      <span class="label-tag">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Como trabalhamos
      </span>
      <h2 class="section-title" id="process-title">
        O processo que garante<br>
        <span style="color:var(--color-accent);">resultados reais</span>
      </h2>
      <p class="section-subtitle">
        Cada projecto segue um processo rigoroso de 4 fases — do diagnóstico à escala.
        Sem surpresas. Sem promessas vazias. Só resultados.
      </p>
    </div>

    <div class="process-grid" role="list">

      <article class="process-step reveal" role="listitem">
        <div class="step-num" aria-label="Fase 1">01</div>
        <h3 class="step-title">Diagnóstico</h3>
        <p class="step-desc">
          Analisamos o seu negócio em profundidade — onde está agora, onde quer chegar
          e qual o sistema correcto para lá chegar o mais rápido possível.
        </p>
      </article>

      <article class="process-step reveal reveal-delay-2" role="listitem">
        <div class="step-num" aria-label="Fase 2">02</div>
        <h3 class="step-title">Estratégia</h3>
        <p class="step-desc">
          Desenhamos um plano digital à medida — com os serviços certos, na ordem certa,
          para o máximo retorno sobre o investimento com o mínimo de risco.
        </p>
      </article>

      <article class="process-step reveal reveal-delay-3" role="listitem">
        <div class="step-num" aria-label="Fase 3">03</div>
        <h3 class="step-title">Implementação</h3>
        <p class="step-desc">
          Executamos com precisão e velocidade. Desenvolvemos, testamos e lançamos
          cada componente do sistema com padrão de qualidade premium.
        </p>
      </article>

      <article class="process-step reveal reveal-delay-4" role="listitem">
        <div class="step-num" aria-label="Fase 4">04</div>
        <h3 class="step-title">Escala</h3>
        <p class="step-desc">
          Com o sistema no ar, optimizamos continuamente para crescimento previsível.
          Medimos, ajustamos e escalamos — com dados, não com intuição.
        </p>
      </article>

    </div>
  </div>
</section>


<!-- ════════════════════ TESTEMUNHOS ════════════════════ -->
<section class="section section-dark" id="testemunhos-sobre" aria-labelledby="about-testimonials-title">
  <div class="container">
    <div class="section-header center reveal">
      <span class="label-tag">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Provas reais
      </span>
      <h2 class="section-title" id="about-testimonials-title">
        O que dizem os<br>
        <span style="color:var(--color-accent);">nossos clientes</span>
      </h2>
    </div>

    <div class="testimonials-grid" role="list">

      <?php
      $testimonials = [
        [
          'initial' => 'M', 'name' => 'Miguel Fernandes', 'company' => 'CEO — FernandesTech',
          'text'    => '"A Kutunga não é uma agência normal. São parceiros reais. Desde o primeiro dia trataram o meu negócio como se fosse deles. O resultado fala por si: vendas cresceram 3x em 6 meses."',
        ],
        [
          'initial' => 'C', 'name' => 'Carla Neto', 'company' => 'Directora — Moda Luanda',
          'text'    => '"O que mais me impressionou foi a honestidade. Antes de assinar qualquer contrato, disseram-me exactamente o que podiam fazer, como iam fazer e que resultados eram esperados. E cumpriram tudo."',
        ],
        [
          'initial' => 'P', 'name' => 'Paulo Augusto', 'company' => 'Fundador — StartupAO',
          'text'    => '"Processo impecável do início ao fim. Cada fase foi explicada, cada decisão foi justificada. Não é só o resultado final que impressiona — é toda a experiência de trabalhar com eles."',
        ],
      ];

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


<!-- ════════════════════ VALORES ════════════════════ -->
<section class="section section-surface" id="valores" aria-labelledby="values-title">
  <div class="container">
    <div class="section-header center reveal">
      <span class="label-tag">
        <span class="label-tag-dot" aria-hidden="true"></span>
        O que nos define
      </span>
      <h2 class="section-title" id="values-title">
        Os valores que<br>
        <span style="color:var(--color-accent);">guiam o nosso trabalho</span>
      </h2>
    </div>

    <div class="values-grid" role="list">

      <?php
      $values = [
        [
          'title' => 'Resultados acima de tudo',
          'desc'  => 'Não nos satisfazemos com entregas bonitas. O nosso sucesso é medido pelo crescimento do seu negócio. Nada mais importa.',
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
        ],
        [
          'title' => 'Transparência radical',
          'desc'  => 'Comunicação clara, prazos cumpridos, orçamentos respeitados. Sem surpresas, sem letras miúdas. O que dizemos é o que fazemos.',
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>',
        ],
        [
          'title' => 'Pensamento sistémico',
          'desc'  => 'Não resolvemos problemas isolados. Construímos sistemas completos, integrados e escaláveis que funcionam em conjunto para o crescimento.',
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
        ],
        [
          'title' => 'Excelência sem compromisso',
          'desc'  => 'Cada detalhe importa. Cada linha de código, cada pixel, cada palavra. O padrão de qualidade que aceitamos é o mais alto possível.',
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        ],
      ];

      foreach ($values as $v): ?>
      <article class="value-card reveal" role="listitem">
        <div class="value-icon" aria-hidden="true"><?= $v['icon'] ?></div>
        <h3 class="value-title"><?= htmlspecialchars($v['title']) ?></h3>
        <p class="value-desc"><?= htmlspecialchars($v['desc']) ?></p>
      </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ═════════════════════════ CTA FINAL ═════════════════════════ -->
<section class="cta-section" id="cta-sobre" aria-labelledby="about-cta-title">
  <div class="container">
    <div class="cta-card reveal">
      <span class="label-tag" style="margin-bottom:24px;">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Pronto para crescer?
      </span>
      <h2 class="section-title" id="about-cta-title">
        O seu negócio merece<br>
        o <span style="color:var(--color-accent);">sistema certo.</span>
      </h2>
      <p class="section-subtitle">
        Junta-te aos negócios que já pararam de tentar e começaram a escalar com sistema.
        Uma conversa pode mudar tudo.
      </p>
      <div class="cta-actions">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="aboutCtaWa">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
          </svg>
          Falar com a Kutunga agora
        </a>
        <a href="servicos.php" class="btn btn-secondary btn-lg" id="aboutCtaServices">
          Ver os nossos serviços
        </a>
      </div>
    </div>
  </div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
