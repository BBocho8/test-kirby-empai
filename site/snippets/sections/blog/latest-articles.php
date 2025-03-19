<!-- <div class="container max-w-6xl px-4 pt-12 mx-auto">
  <h1 class="py-8 mb-8 text-4xl text-center font-goldman"><?= t('blog.title') ?></h1>
  <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($page->children()->listed() as $post): ?>
      <div class="overflow-hidden bg-white border rounded-lg shadow-md">


        <?php if ($post->image()): ?>
          <img src="<?= $post->image()->url() ?>" alt="<?= $post->title() ?>" class="object-cover w-full h-48">
        <?php endif ?>
        <div class="p-6">
          <span class="px-3 py-2 text-white capitalize rounded bg-primary-500"><?= $post->category() ?></span>
          <h2 class="mt-4 mb-2 text-xl font-semibold line-clamp-2"><?= $post->title() ?></h2>
          <?php if ($post->description()->isNotEmpty()): ?>
            <p class="mb-4 text-gray-600 line-clamp-3"><?= $post->description() ?></p>
          <?php endif ?>
          <a href="<?= $post->url() ?>" class="font-semibold text-primary hover:underline"><?= t("blog.readmore") ?> →</a>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div> -->


<?php
// Pagination settings
$pageNumber = $_GET['page'] ?? 1; // Get the current page number from the URL
$articlesPerPage = 9; // Number of articles to display per page
$totalArticles = $page->children()->listed()->count(); // Total number of articles
$totalPages = ceil($totalArticles / $articlesPerPage); // Calculate total pages

// Fetch articles for the current page
$offset = ($pageNumber - 1) * $articlesPerPage; // Calculate the offset
$articles = $page->children()->listed()->offset($offset)->limit($articlesPerPage);
?>

<div class="container max-w-6xl px-4 pt-12 mx-auto">
  <h1 class="py-8 mb-8 text-4xl text-center font-goldman"><?= t('blog.title') ?></h1>
  <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($articles as $post): ?>
      <div class="overflow-hidden bg-white border rounded-lg shadow-md">
        <?php if ($post->image()): ?>
          <img src="<?= $post->image()->url() ?>" alt="<?= $post->title() ?>" class="object-cover w-full h-48">
        <?php endif ?>
        <div class="p-6">
          <span class="px-3 py-2 text-white capitalize rounded bg-primary-500"><?= $post->category() ?></span>
          <h2 class="mt-4 mb-2 text-xl font-semibold line-clamp-2"><?= $post->title() ?></h2>
          <?php if ($post->description()->isNotEmpty()): ?>
            <p class="mb-4 text-gray-600 line-clamp-3"><?= $post->description() ?></p>
          <?php endif ?>
          <a href="<?= $post->url() ?>" class="font-semibold text-primary hover:underline"><?= t("blog.readmore") ?> →</a>
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <!-- Pagination Navigation -->
  <div class="flex justify-center mt-12 space-x-4">
    <?php if ($pageNumber > 1): ?>
      <a href="?page=<?= $pageNumber - 1 ?>" class="px-4 py-2 text-white rounded bg-primary-500 hover:bg-primary-600"><?= t('blog.previous') ?></a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
      <a
        href="?page=<?= $i ?>"
        class="px-4 py-2 text-white rounded <?= $i == $pageNumber ? 'bg-primary-700' : 'bg-primary-500 hover:bg-primary-600' ?>">
        <?= $i ?>
      </a>
    <?php endfor; ?>

    <?php if ($pageNumber < $totalPages): ?>
      <a href="?page=<?= $pageNumber + 1 ?>" class="px-4 py-2 text-white rounded bg-primary-500 hover:bg-primary-600"><?= t('blog.next') ?></a>
    <?php endif; ?>
  </div>
</div>