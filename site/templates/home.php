<?php snippet('header') ?>


<div class="modules-container">
  <div class="flex flex-col ">

    <p class="home-main-text"><?= $page->MainText() ?></p>
    <p class="home-sub-text">
      <span>
        <?= $page->SubText1() ?>
      </span>
      <span>
        <?= $page->SubText2() ?>
      </span>
    </p>
  </div>
  <div class="modules-container-buttons">
    <?php foreach ($page->Buttons()->toStructure() as $button): ?>
      <a href="#<?= $button->buttontext() ?>">

        <button>
          <img src="/assets/icons/home-buttons/<?= $button->icon() ?>.png" alt="<?= $button->icon() ?>">
          <?= $button->buttonText() ?>
        </button>
      </a>
    <?php endforeach ?>
  </div>
</div>


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

<!-- Experience the Difference Section -->
<?php snippet('sections/experience-difference', ['section' => $page->Advantages()->toStructure()->first()]) ?>

<!-- Experience the Difference Section -->
<?php snippet('sections/iso-compliance', ['section' => $page->Compliance()->toStructure()->first()]) ?>

<?php snippet('footer') ?>