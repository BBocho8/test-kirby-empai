<?php foreach ($page->Features()->toStructure() as $index => $feature): ?>
  <div id="<?= $feature->featurename() ?>" class="feature-item <?= $index % 2 === 0 ? 'odd' : 'even' ?>">
    <!-- Image Column -->
    <div class="image-column">
      <?php if ($feature->images()->isNotEmpty()): ?>
        <?php $image = $feature->images()->toFile(); ?>
        <img src="<?= $image->url() ?>" alt="<?= $feature->featurename() ?>" class="feature-image">
      <?php endif; ?>
    </div>

    <!-- Content Column -->
    <div class="content-column">
      <div class="icon">
        <img src="/assets/icons/modules/<?= $feature->icon() ?>.png" alt="<?= $feature->icon() ?>">
      </div>
      <div>

        <h2 class="featurename"><?= $feature->featurename() ?></h2>
        <h3 class="featuresubtitle"><?= $feature->featuresubtitle() ?></h3>
      </div>
      <p class="featuredescription"><?= $feature->featuredescription() ?></p>
      <a href="<?= $site->url() ?>/modules/<?= $feature->moduleID() ?>">
        <button class="featurebutton">
          <?= $feature->featurebuttontext() ?>
          <img src="/assets/icons/rightarrow.svg" alt="Dropdown arrow" class="module-arrow-icon">
        </button>
      </a>
    </div>
  </div>
<?php endforeach; ?>