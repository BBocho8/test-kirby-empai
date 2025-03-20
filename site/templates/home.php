<?php snippet('header') ?>

<?php snippet('sections/homepage/hero', ['page' => $page]) ?>
<?php snippet('sections/homepage/form', ['section' => $page->Form()->toStructure()->first()]) ?>
<?php snippet('sections/homepage/home-modules', ['page' => $page]) ?>
<?php snippet('sections/homepage/featured-modules', ['page' => $page]) ?>
<?php snippet('sections/homepage/experience-difference', ['section' => $page->Advantages()->toStructure()->first()]) ?>
<?php snippet('sections/homepage/iso-compliance', ['section' => $page->Compliance()->toStructure()->first()]) ?>

<?= js([
  'assets/js/animated-number.js',
  'assets/js/form-animation.js',
  'assets/js/advantages-animation.js',
]) ?>

<?php snippet('footer') ?>