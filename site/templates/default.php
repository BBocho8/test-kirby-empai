<?php snippet('header') ?>

<!-- <article>
  <h1 class="h1"><?= $page->title()->esc() ?></h1>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</article>  -->



<h1><?= $page->title()->kt() ?></h1>
<h2><?= $page->title() ?></h2>
<h3><?= $page->title() ?></h3>
<h4><?= $page->title() ?></h4>
<h5><?= $page->title() ?></h5>
<h6><?= $page->title() ?></h6>

<?php snippet('footer') ?>