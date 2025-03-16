<!-- site/templates/blog.php -->
<?php snippet('header') ?>



<main class="py-12 bg-gray-50">
  <div class="container px-4 mx-auto">
    <h1 class="mb-8 text-4xl text-center font-goldman"><?= t('blog.title') ?></h1>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($page->children()->listed() as $post): ?>
        <div class="overflow-hidden bg-white rounded-lg shadow-md">
          <?php if ($post->image()): ?>
            <img src="<?= $post->image()->url() ?>" alt="<?= $post->title() ?>" class="object-cover w-full h-48">
          <?php endif ?>
          <div class="p-6">
            <h2 class="mb-2 text-xl font-semibold"><?= $post->title() ?></h2>
            <?php if ($post->excerpt()->isNotEmpty()): ?>
              <p class="mb-4 text-gray-600"><?= $post->excerpt() ?></p>
            <?php endif ?>
            <a href="<?= $post->url() ?>" class="font-semibold text-primary hover:underline"><?= t("blog.readmore") ?> →</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>


  <div class="mx-auto mt-24 mb-16 w-[1000px] bg-empaiBlack p-8 rounded-md">

    <div class="flex flex-col gap-4">
      <p class="text-4xl text-center text-white font-goldman">Erreichen Sie mehr, </br> verbrauchen Sie weniger</p>
      <p class="text-2xl text-center text-primary ">Sprechen Sie uns an für eine Potentialanalyse.</p>
      <a href="mailto:info@empai.net?subject=Interested%20in%20empAI" class="inline-flex items-center justify-center my-2 ">
        <button class="px-4 py-2 text-black bg-white border border-black rounded hover:opacity-90 font-goldman">
          <div class="flex items-center justify-center gap-2">
            <span>Jetzt anfragen</span>
            <img src="/assets/icons/rightarrow-black.svg" alt="" class="w-6 h-6">
          </div>
        </button>
      </a>

    </div>
  </div>
</main>


<?php snippet('footer') ?>