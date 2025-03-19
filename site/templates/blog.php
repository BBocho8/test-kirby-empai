<!-- site/templates/blog.php -->
<?php snippet('header') ?>

<main class="bg-gray-50">

  <?php snippet('sections/blog/blog-header', ['page' => $page]) ?>
  <?php snippet('sections/blog/latest-articles', ['page' => $page]) ?>
  <?php snippet('sections/blog/contact') ?>


</main>

<?= js([
  'assets/js/blog-header.js',
]) ?>

<?php snippet('footer') ?>