<section class="z-[999999] border-b-2 border-primary backdrop-blur-[10px] bg-opacity-20 bg-white flex justify-center items-center w-full h-navbarHeight pt-[0.7em] pb-[0.7em] ">
  <div class="flex justify-between items-center w-[85%] max-w-none text-2xl">
    <a href="<?= $site->url() ?>" class="logo-link">
      <?php if ($logo): ?>
        <img src="<?= $logo->url() ?>"
          alt="<?= $site->title()->esc() ?>"
          class="logo logo-<?= $logo_size ?>">
      <?php else: ?>
        <!-- Fallback logo -->
        <img src="/assets/logo/empai-logo.png"
          alt="<?= $site->title()->esc() ?>"
          class="logo logo-<?= $logo_size ?>">
      <?php endif ?>
    </a>

    <!-- Burger Menu Button -->
    <button class="burger-menu" aria-label="Toggle menu">
      <img src="/assets/icons/burger-menu.svg" alt="Menu" class="burger-icon">
    </button>

    <nav class="navbar-menu">


      <?php foreach ($menu_items as $item): ?>

        <?php
        // Get the full URL for comparison
        $itemUrl = $site->url() . $item->link()->value();
        $currentUrl = $page->url();

        // Check if current URL matches or starts with item URL (for subpages)
        $isActive = $currentUrl === $itemUrl || str_starts_with($currentUrl, $itemUrl . '/');
        ?>

        <a href="<?= $site->url() ?><?= $item->link()->value() ?>" class="<?= $isActive ? 'active' : '' ?>">
          <?= $item->title()->esc() ?>
        </a>
      <?php endforeach ?>


      <a href="mailto:info@empai.net?subject=Interested%20in%20empAI">
        <button class="btn"><?= $contact_button_text ?></button>
      </a>

      <!-- Language Switcher -->
      <?php if ($show_language_switcher->toBool()): ?>
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
      <?php endif ?>
    </nav>
  </div>
</section>