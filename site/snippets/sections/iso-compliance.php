<section class="py-12 bg-white">
  <div class="container max-w-2xl px-4 mx-auto">
    <div class="flex flex-col items-center text-center">



      <!-- Content -->
      <div class="mb-8 prose text-left prose-h2:mt-0 prose-h2:mb-0">
        <!-- Logo -->
        <?php if ($logo = $section->logo()->toFile()): ?>
          <img src="<?= $logo->url() ?>" alt="ISO 50001 Compliant Logo" class="w-56 m-0">
        <?php endif ?>
        <?= $section->isocontent()->kt() ?>
      </div>

      <!-- Button -->
      <a href="mailto:info@empai.net?subject=Interested%20in%20empAI" class="inline-flex items-center self-start px-6 py-2 text-white rounded-lg bg-primary hover:bg-primary-dark">
        <span><?= $section->buttontext() ?></span>
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </a>
    </div>
  </div>
</section>