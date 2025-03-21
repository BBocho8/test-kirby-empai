<section class="navbar-desktop">

  <div class="navbar-wrapper">
    <a href="<?= $site->url() ?>">
      <img src="/assets/logo/empai-logo.png" alt="" class="logo">
    </a>

    <!-- Burger Menu Button -->
    <button class="burger-menu" aria-label="Toggle menu">
      <span class="burger-icon"></span>
    </button>

    <nav class="navbar-menu">
      <?php foreach ($site->children()->listed() as $item): ?>
        <a <?php e($item->isOpen(), 'aria-current="page" class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a>
      <?php endforeach ?>

      <a href="mailto:info@empai.net?subject=Interested%20in%20empAI">
        <button class="btn">Contact Us</button>
      </a>

      <!-- Language Switcher -->
      <div class="language-switcher">
        <button class="language-button">
          <img src="/assets/icons/<?= kirby()->language()->code() ?>.svg" alt="<?= kirby()->language()->name() ?>">
          <img src="/assets/icons/arrowdown.svg" alt="Dropdown arrow" class="arrow-icon">
        </button>
        <div class="language-dropdown">
          <?php foreach ($kirby->languages() as $language): ?>
            <a href="<?= $page->url($language->code()) ?>" class="language-option">
              <img src="/assets/icons/<?= $language->code() ?>.svg" alt="<?= $language->name() ?>">
              <span><?= $language->name() ?></span>
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </nav>
  </div>
</section>