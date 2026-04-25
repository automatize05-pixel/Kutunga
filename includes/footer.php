<?php
/* ============================================================
   KUTUNGA DIGITAL — FOOTER.PHP
   Footer reutilizável em todas as páginas
   ============================================================ */
$wa_link = 'https://wa.me/244935043421?text=' . rawurlencode('Olá! Quero saber mais sobre os serviços da Kutunga Digital.');
$year = date('Y');
?>

<!-- ═══════════════════════════════════ FOOTER ═══════════════════════════════════ -->
<footer class="footer" id="footer">
  <div class="container">

    <div class="footer-top">

      <!-- Brand -->
      <div>
        <div class="footer-logo">Kutunga<span class="dot">.</span>Digital</div>
        <p class="footer-slogan">
          Não criamos websites. Criamos sistemas de crescimento previsível para negócios que querem escalar.
        </p>
        <div class="footer-socials">
          <!-- Instagram -->
          <a href="#" target="_blank" rel="noopener" class="social-link" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <circle cx="12" cy="12" r="4"/>
              <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
            </svg>
          </a>
          <!-- Facebook -->
          <a href="#" target="_blank" rel="noopener" class="social-link" aria-label="Facebook">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
            </svg>
          </a>
          <!-- LinkedIn -->
          <a href="#" target="_blank" rel="noopener" class="social-link" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
          <!-- WhatsApp -->
          <a href="<?= $wa_link ?>" target="_blank" rel="noopener" class="social-link" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Serviços -->
      <div>
        <h3 class="footer-col-title">Serviços</h3>
        <ul class="footer-links">
          <li><a href="servicos.php">Sites Institucionais</a></li>
          <li><a href="servicos.php">Apps Mobile &amp; Web</a></li>
          <li><a href="servicos.php">Marketing &amp; Tráfego Pago</a></li>
          <li><a href="servicos.php">Social Media</a></li>
          <li><a href="servicos.php">Automação de Negócios</a></li>
          <li><a href="servicos.php">E-commerce</a></li>
        </ul>
      </div>

      <!-- Links -->
      <div>
        <h3 class="footer-col-title">Empresa</h3>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="servicos.php">Serviços</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="<?= $wa_link ?>" target="_blank" rel="noopener">WhatsApp</a></li>
        </ul>
      </div>

      <!-- Contacto -->
      <div>
        <h3 class="footer-col-title">Contacto</h3>
        <ul class="footer-links">
          <li>
            <a href="<?= $wa_link ?>" target="_blank" rel="noopener">
              +244 935 043 421
            </a>
          </li>
          <li>
            <a href="mailto:automatizemais@outlook.com">
              automatizemais@outlook.com
            </a>
          </li>
          <li style="color:var(--color-text-muted);font-size:0.875rem;margin-top:8px;">
            Luanda, Angola
          </li>
          <li style="margin-top:16px;">
            <a href="contacto.php" class="btn btn-accent-outline" style="font-size:0.875rem;padding:10px 18px;">
              Pedir Proposta
            </a>
          </li>
        </ul>
      </div>

    </div><!-- /footer-top -->

    <div class="footer-bottom">
      <p class="footer-copy">
        &copy; <?= $year ?> <span>Kutunga Digital</span>. Todos os direitos reservados.
      </p>
      <div class="footer-legal">
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos de Uso</a>
      </div>
    </div>

  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
