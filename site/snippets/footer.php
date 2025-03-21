</main>


<div class="footer-container">

  <div class="footer">
    <div class="grid-cols-5 footer-left">
      <div class="flex flex-col gap-2">
        <img src="/assets/logo/empai-logo.png" alt="" class="w-32">
        <p class="text-base font-medium">AI-Powered Energy Management for Sustainable Efficiency</p>
      </div>
      <p class="text-sm">A product of <a style="color:white; text-decoration:underline" href="http://bonnconsulting.group/" target="_blank" rel="noopener noreferrer">Bonn Consulting GmbH</a></p>

    </div>
    <div class="grid-cols-7 footer-right">
      <div class="footer-menu">
        <p class="footer-menu-title">Content</p>
        <?php foreach ($site->children()->listed() as $example): ?>
          <a class="footer-menu-item" href="<?= $example->url() ?>"><?= $example->title()->esc() ?></a>
        <?php endforeach ?>
      </div>


      <div class="footer-menu">
        <p class="footer-menu-title">Legal</p>
        <a class="footer-menu-item" href="/legal">Imprint</a>
        <a class="footer-menu-item" href="https://www.iubenda.com/privacy-policy/37354003" target="_blank" rel="noopener noreferrer">
          Data Protection
        </a>
      </div>

      <div class="footer-menu">
        <p class="footer-menu-title">Contact</p>
        <a class="footer-menu-item" href="mailto:info@empai.net?subject=empAI%20Interest">info@empai.net</a>
      </div>



    </div>
  </div>
</div>

<div class="cookie-container">
  <button class="cookie-button" type="button" data-cc="show-preferencesModal" aria-haspopup="dialog">
    <!-- SVG Icon -->
    <img src="/assets/icons/cookie-settings.svg" alt="Cookie Settings Icon" class="cookie-icon">
    <!-- Button Text -->
    Ihre Datenschutzeinstellungen
  </button>
</div>

<?= js([
  'assets/js/language-switcher.js',
  'assets/js/burger-menu.js',
  '@auto'
]) ?>

<?php snippet('cookieconsentJs') ?>


</body>

</html>