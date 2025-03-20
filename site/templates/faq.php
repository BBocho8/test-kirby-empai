<?php snippet('header') ?>

<main class="py-12  max-w-[1200px] mx-auto">
  <div class="container px-4 mx-auto">
    <h1 class="mb-8 text-4xl text-center font-goldman"><?= t('faq.title') ?></h1>

    <p class="text-xl"><?= $page->introduction() ?></p>

    <!-- Loop through FAQ sections -->
    <?php foreach ($page->sections()->toStructure() as $section): ?>
      <div class="mb-12">
        <h2 class="mb-6 text-3xl font-bold"><?= $section->sectionTitle() ?></h2>

        <!-- Loop through questions in the section -->
        <?php foreach ($section->questions()->toStructure() as $question): ?>
          <div class="mb-4 border-b shadow-sm border-primary">
            <button class="flex items-center justify-between w-full p-4 text-left focus:outline-none" aria-expanded="false">
              <span class="text-2xl font-semibold text-black"><?= $question->question() ?></span>
              <svg class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="hidden p-4 pt-0 text-xl text-black font-extralight">
              <span class=""><?= $question->answer()->kt() ?></span>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    <?php endforeach ?>
  </div>

  <?php snippet('sections/blog/contact') ?>
</main>

<!-- Include the external JavaScript file -->
<script src="<?= url('assets/js/faq-accordion.js') ?>"></script>

<?php snippet('footer') ?>