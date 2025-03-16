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

<!-- Include the external JavaScript file -->
<script src="<?= url('assets/js/faq-accordion.js') ?>"></script>

<?php snippet('footer') ?>