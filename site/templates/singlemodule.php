<?php snippet('header') ?>

<main class="module">
  <!-- Icon + Title -->
  <div class="module-header">
    <img src="/assets/icons/modules/<?= $page->icon() ?>.png" alt="<?= $page->title() ?>" class="module-icon">
    <h1 class="module-title"><?= $page->moduleName() ?></h1>
  </div>

  <!-- Introduction -->
  <div class="module-introduction">
    <?= $page->introduction()->kt() ?>
  </div>

  <!-- Die Funktionen im Überblick -->
  <h2 class="module-subtitle">Die Funktionen im Überblick</h2>


  <?php foreach ($page->features()->toStructure() as $feature): ?>
    <div class="feature">
      <?php if ($image = $feature->images()->toFiles()->first()): ?>
        <div class="feature-image-container">

          <img src="<?= $image->url() ?>" alt="<?= $feature->subtitle() ?>" class="feature-image">
        </div>
      <?php endif ?>
      <h3><?= $feature->subtitle() ?></h3>
      <p><?= $feature->description()->kt() ?></p>
    </div>
  <?php endforeach ?>


  <!-- Weitere Module für Ihren Nutzen -->
  <h2 class="module-subtitle">Weitere Module für Ihren Nutzen:</h2>
  <div class="related-modules">
    <?php
    // Check if the current page is the Modules parent page
    if ($page->is('modules')) {
      // Fetch all children of the Modules page
      $children = $page->children()->listed();

      // Filter out modules with the same moduleName as the parent page
      $relatedModules = $children->filter(function ($module) use ($page) {
        return $module->moduleName()->value() !== $page->moduleName()->value();
      })->limit(3);
    } else {
      // Fetch siblings of the current module
      $siblings = $page->siblings()->listed();

      // Filter out the current module
      $relatedModules = $siblings->not($page)->limit(3);
    }
    ?>

    <?php foreach ($relatedModules as $module): ?>
      <a href="<?= $module->url() ?>" class="module-button">
        <img src="/assets/icons/modules/<?= $module->icon() ?>.png" alt="<?= $module->title() ?>" class="module-button-icon">
        <span class="module-button-span"><?= $module->moduleName() ?></span>

        <img src="/assets/icons/rightarrow.svg" alt="Dropdown arrow" class="module-arrow-icon">



      </a>
    <?php endforeach ?>
  </div>
</main>


</main>

<?php snippet('footer') ?>