<!-- site/templates/blogpost.php -->
<?php snippet('header') ?>

<!-- Back to Blog Overview Button -->
<div class="container max-w-4xl px-4 py-6 mx-auto">
  <a href="<?= $site->page('blog')->url() ?>" class="inline-flex items-center text-primary hover:underline">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
    </svg>
    <span><?= t('blog.zuruck') ?></span>
  </a>
</div>

<article class="max-w-4xl px-4 py-4 mx-auto">
  <header class="mb-8">
    <h1 class="mb-4 text-4xl font-bold"><?= $page->title() ?></h1>
    <?php if ($image = $page->images()->first()): ?>
      <img src="<?= $image->url() ?>" alt="<?= $page->title() ?>" class="object-cover w-full h-64 mt-6 rounded-lg">
    <?php endif ?>
  </header>
  <div class="prose max-w-none">
    <?= $page->postContent()->kt() ?>
  </div>
  <footer class="mt-8">
    <?php if ($page->category()->isNotEmpty()): ?>
      <div class="flex space-x-2">
        <span class="px-3 py-1 text-sm text-gray-800 bg-gray-200 rounded-full"><?= $page->category() ?></span>
      </div>
    <?php endif ?>
  </footer>
</article>

<!-- Related Blog Posts Grid -->
<section class="py-12 bg-gray-50">
  <div class="container px-4 mx-auto">
    <h2 class="mb-8 text-3xl text-center font-goldman"><?= t("blog.morearticles") ?></h2>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
      <?php
      // Get all blog posts except the current one
      $relatedPosts = $site->page('blog')->children()->listed()->filter(function ($post) use ($page) {
        return $post->uri() !== $page->uri();
      })->limit(3); // Limit to 3 posts
      ?>
      <?php foreach ($relatedPosts as $post): ?>
        <div class="overflow-hidden bg-white rounded-lg shadow-md">
          <?php if ($image = $post->images()->first()): ?>
            <img src="<?= $image->url() ?>" alt="<?= $post->title() ?>" class="object-cover w-full h-48">
          <?php endif ?>
          <div class="p-6">
            <h3 class="mb-2 text-xl font-semibold"><?= $post->title() ?></h3>
            <p class="mb-4 text-gray-600"><?= $post->description() ?></p>
            <a href="<?= $post->url() ?>" class="font-semibold text-primary hover:underline"><?= t("blog.readmore") ?> →</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<?php snippet('footer') ?>