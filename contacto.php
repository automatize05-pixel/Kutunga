<?php
/* ============================================================
   KUTUNGA DIGITAL — CONTACTO.PHP
   Página de contacto com formulário PHP + WhatsApp
   ============================================================ */

$page_title       = 'Contacto';
$page_description = 'Fale com a Kutunga Digital. WhatsApp +244 935 043 421 ou email automatizemais@outlook.com. Peça a sua proposta personalizada.';
$page_current     = 'contacto.php';

$wa_link    = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero saber mais sobre os serviços da Kutunga Digital.');
$wa_proposta = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero receber uma proposta personalizada da Kutunga Digital.');

// Handle messages from send_mail.php redirect
$success = isset($_GET['success']) && $_GET['success'] === '1';
$error   = isset($_GET['error'])   ? htmlspecialchars($_GET['error']) : '';
$client_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';

// Pre-fill form data if there was an error (from session-less flow — repopulate via URL or just show clean form)

$services_list = [
  'Seleccione um serviço',
  'Site Institucional',
  'App Mobile & Web',
  'Marketing & Tráfego Pago',
  'Gestão de Social Media',
  'Plataforma Digital',
  'Automação de Negócios',
  'E-commerce',
  'Criativos Publicitários',
  'Campanhas de Anúncios',
  'Kutunga Growth System (Pacote Completo)',
  'Outro / Não tenho certeza',
];

include 'includes/header.php';
?>

<!-- ══════════════════════════ PAGE HERO ══════════════════════════ -->
<main id="main-content">
<section class="page-hero" aria-labelledby="contact-hero-title">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container">
    <div class="page-hero-inner">
      <span class="label-tag reveal">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Vamos conversar
      </span>
      <h1 class="page-hero-title reveal reveal-delay-1">
        Pronto para<br>
        <span style="color:var(--color-accent);">escalar?</span><br>
        Fale connosco.
      </h1>
      <p class="page-hero-subtitle reveal reveal-delay-2">
        Sem compromisso. Sem letras miúdas. Em 30 minutos analisamos o seu negócio
        e apresentamos um plano concreto para o fazer crescer.
      </p>
    </div>
  </div>
</section>


<!-- ════════════════════ CONTACT LAYOUT ════════════════════ -->
<section class="section section-surface" id="contacto-main" aria-label="Informações de contacto">
  <div class="container">
    <div class="contact-layout">

      <!-- LEFT — Contact Info -->
      <aside aria-label="Informações de contacto">
        <h2 class="contact-info-title">Fale connosco directamente</h2>

        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="contact-item" id="contactWhatsapp" aria-label="WhatsApp +244 935 043 421">
          <div class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
            </svg>
          </div>
          <div>
            <p class="contact-item-label">WhatsApp</p>
            <p class="contact-item-value">+244 935 043 421</p>
          </div>
        </a>

        <a href="mailto:automatizemais@outlook.com"
           class="contact-item" id="contactEmail" aria-label="Email automatizemais@outlook.com">
          <div class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
          </div>
          <div>
            <p class="contact-item-label">Email</p>
            <p class="contact-item-value">automatizemais@outlook.com</p>
          </div>
        </a>

        <div class="contact-item" style="cursor:default;">
          <div class="contact-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
          </div>
          <div>
            <p class="contact-item-label">Localização</p>
            <p class="contact-item-value">Luanda, Angola</p>
          </div>
        </div>

        <a href="<?= $wa_proposta ?>" target="_blank" rel="noopener noreferrer"
           class="wa-direct-btn" id="contactWaBtn" aria-label="Iniciar conversa no WhatsApp agora">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
          </svg>
          Falar via WhatsApp agora
        </a>

        <!-- Urgency block -->
        <div style="margin-top:28px;padding:20px;background:rgba(0,196,122,0.07);border:1px solid rgba(0,196,122,0.15);border-radius:var(--radius-md);">
          <p style="font-family:var(--font-heading);font-size:0.9375rem;font-weight:700;color:var(--color-text);margin-bottom:8px;">
            Resposta em menos de 24h
          </p>
          <p style="font-size:0.85rem;color:var(--color-text-secondary);line-height:1.6;">
            Cada consulta é respondida com um diagnóstico personalizado do seu negócio —
            sem templates, sem respostas automáticas.
          </p>
        </div>

      </aside>

      <!-- RIGHT — Form -->
      <div class="contact-form-wrap reveal" role="region" aria-label="Formulário de contacto">
        <h2 class="form-title">Enviar mensagem</h2>

        <?php if ($success): ?>
        <div class="form-alert form-alert-success" role="alert" id="successAlert">
          <strong>🎉 Mensagem enviada com sucesso<?= $client_name ? ", {$client_name}" : '' ?>!</strong><br>
          Entraremos em contacto em menos de 24 horas. Pode também falar connosco directamente via WhatsApp.
        </div>
        <?php elseif ($error === 'envio'): ?>
        <div class="form-alert form-alert-error" role="alert" id="errorAlert">
          <strong>Erro ao enviar a mensagem.</strong><br>
          Por favor tente novamente ou contacte-nos directamente via WhatsApp.
        </div>
        <?php elseif ($error === 'validacao'): ?>
        <div class="form-alert form-alert-error" role="alert" id="errorAlert">
          <strong>Por favor verifique os campos assinalados e tente novamente.</strong>
        </div>
        <?php endif; ?>

        <form action="includes/send_mail.php" method="POST"
              id="contactForm" novalidate aria-label="Formulário de proposta">

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="name">Nome completo *</label>
              <input class="form-control" type="text" id="name" name="name"
                     placeholder="João Ferreira"
                     required minlength="2" maxlength="120"
                     autocomplete="name">
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Telefone</label>
              <input class="form-control" type="tel" id="phone" name="phone"
                     placeholder="+244 9XX XXX XXX"
                     maxlength="20"
                     autocomplete="tel">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Email *</label>
            <input class="form-control" type="email" id="email" name="email"
                   placeholder="joao@empresa.com"
                   required maxlength="200"
                   autocomplete="email">
          </div>

          <div class="form-group">
            <label class="form-label" for="service">Serviço de interesse</label>
            <select class="form-control" id="service" name="service">
              <?php foreach ($services_list as $svc): ?>
              <option value="<?= htmlspecialchars($svc) ?>"
                      <?= $svc === 'Seleccione um serviço' ? 'disabled selected' : '' ?>>
                <?= htmlspecialchars($svc) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Mensagem *</label>
            <textarea class="form-control" id="message" name="message"
                      placeholder="Conte-nos sobre o seu negócio e o que pretende alcançar. Quanto mais detalhe fornecer, mais precisa será a nossa proposta."
                      required minlength="10" maxlength="2000"></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-lg"
                  id="submitFormBtn" style="width:100%;justify-content:center;margin-top:8px;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <line x1="22" y1="2" x2="11" y2="13"/>
              <polygon points="22 2 15 22 11 13 2 9 22 2"/>
            </svg>
            Enviar mensagem
          </button>

          <p style="margin-top:14px;font-size:0.8125rem;color:var(--color-text-muted);text-align:center;">
            Os seus dados são confidenciais. Não fazemos spam.
          </p>

        </form>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════ FAQ / URGÊNCIA ════════════════════ -->
<section class="section section-dark" id="faq" aria-labelledby="faq-title">
  <div class="container">
    <div class="section-header center reveal">
      <span class="label-tag">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Perguntas frequentes
      </span>
      <h2 class="section-title" id="faq-title">
        Dúvidas antes de<br>
        <span style="color:var(--color-accent);">dar o próximo passo?</span>
      </h2>
    </div>

    <?php
    $faqs = [
      ['q' => 'Quanto tempo demora para ver resultados?', 'a' => 'Depende do serviço. Um site pode estar no ar em 2-4 semanas. Campanhas de anúncios começam a gerar resultados nas primeiras 2 semanas. Automações completas levam entre 4-8 semanas para configuração total.'],
      ['q' => 'Trabalham com empresas de qualquer dimensão?', 'a' => 'Sim. Trabalhamos com empreendedores individuais, PMEs e empresas de médio porte. O que importa não é o tamanho — é a vontade de crescer com sistema.'],
      ['q' => 'Qual é o investimento mínimo?', 'a' => 'Cada projecto é único e o valor depende da complexidade do sistema. Numa conversa de 30 minutos analisamos o seu negócio e apresentamos um plano com valor claro e retorno esperado.'],
      ['q' => 'E depois da entrega, ficam disponíveis?', 'a' => 'Absolutamente. Não somos uma agência que desaparece. Oferecemos suporte contínuo, optimização e acompanhamento para garantir que o sistema continua a gerar resultados.'],
    ];
    ?>

    <div style="max-width:720px;margin:0 auto;display:flex;flex-direction:column;gap:12px;" role="list">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="value-card reveal reveal-delay-<?= $i + 1 ?>" role="listitem"
           style="padding:24px 28px;">
        <h3 style="font-family:var(--font-heading);font-size:1rem;font-weight:700;color:var(--color-text);margin-bottom:10px;display:flex;align-items:center;gap:12px;">
          <span style="color:var(--color-accent);font-size:1.125rem;" aria-hidden="true">→</span>
          <?= htmlspecialchars($faq['q']) ?>
        </h3>
        <p style="font-size:0.9rem;color:var(--color-text-secondary);line-height:1.7;padding-left:28px;">
          <?= htmlspecialchars($faq['a']) ?>
        </p>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═════════════════════════ CTA FINAL ═════════════════════════ -->
<section class="cta-section" id="cta-contacto" aria-labelledby="contact-cta-title">
  <div class="container">
    <div class="cta-card reveal">
      <span class="label-tag" style="margin-bottom:24px;">
        <span class="label-tag-dot" aria-hidden="true"></span>
        Não espere mais
      </span>
      <h2 class="section-title" id="contact-cta-title">
        Cada dia sem sistema<br>
        é um dia a <span style="color:var(--color-accent);">perder dinheiro.</span>
      </h2>
      <p class="section-subtitle">
        A sua concorrência já está a usar sistemas digitais para crescer.
        A pergunta é: quando vai começar a usar também?
      </p>
      <div class="cta-actions">
        <a href="<?= $wa_link ?>" target="_blank" rel="noopener noreferrer"
           class="btn btn-primary btn-lg" id="contactCtaWa">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
          </svg>
          Quero falar com a Kutunga agora
        </a>
        <a href="servicos.php" class="btn btn-secondary btn-lg" id="contactCtaServices">
          Ver os nossos serviços
        </a>
      </div>
    </div>
  </div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
