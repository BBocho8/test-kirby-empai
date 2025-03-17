<?php snippet('header') ?>

<?php snippet('sections/homepage/hero') ?>
<?php snippet('sections/homepage/form') ?>
<?php snippet('sections/homepage/home-modules', ['page' => $page]) ?>
<?php snippet('sections/homepage/featured-modules', ['page' => $page]) ?>
<?php snippet('sections/homepage/experience-difference', ['section' => $page->Advantages()->toStructure()->first()]) ?>
<?php snippet('sections/homepage/iso-compliance', ['section' => $page->Compliance()->toStructure()->first()]) ?>

<?php snippet('footer') ?>