<?php

/** @var \Kirby\Cms\Block $block */
/** @var \Kirby\Cms\Page $page */
$background = $block->background_image()->toFile();
?>
<div class="pb-32">
  <div class="relative flex flex-col items-center justify-center gap-2 h-heroHeight">
    <?php if ($background): ?>
      <div class="absolute w-full h-full bg-center bg-no-repeat bg-cover"
        style="background-image: url('<?= $background->url() ?>')"></div>
    <?php else: ?>
      <div class="absolute bg-[url(/assets/images/bg-image.png)] bg-cover bg-no-repeat bg-[100%_200px] w-full h-full"></div>
    <?php endif ?>

    <h1 class="text-center font-goldman text-8xl"><?= $block->hero_title() ?></h1>
    <p class="text-4xl text-center"><?= $block->hero_subtitle() ?></p>
    <a class="z-10" href="<?= $block->hero_button_link()->toUrl() ?>">
      <button class=" mt-8 flex items-center justify-center px-4 py-2 font-bold bg-transparent border rounded text-[#22C55E] border-[#22C55E]">
        <span><?= $block->hero_button_text()->esc() ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24">
          <path fill="#22C55E" d="M11 15H6l7-14v8h5l-7 14z" />
        </svg>
      </button>
    </a>
  </div>
</div>