<section class="py-40 bg-empaiBlack">
  <div class="container max-w-6xl px-4 mx-auto ">
    <h2 class="mb-16 text-4xl text-center text-white font-goldman"><?= $section->sectiontitle() ?></h2>
    <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
      <!-- Left Box -->
      <div id="left-box" class="p-6 bg-[#49525C] rounded-lg shadow-md border border-primary text-white">
        <div class="flex items-center gap-2 mb-4">

          <h3 class="text-2xl font-goldman"><?= $section->lefttitle() ?>
          </h3>
          <img src="/assets/logo/empai-logo.png" alt="" class="w-32">
        </div>
        <ul class="space-y-4 ">
          <?php foreach ($section->leftadvantages()->toStructure() as $advantage): ?>
            <li class="flex items-center pl-8">
              <svg class="w-6 h-6 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span><?= $advantage->advantage() ?></span>
            </li>
          <?php endforeach ?>
        </ul>
        <div class="mt-6">
          <a href="<?= $section->leftbuttonlink() ?>">
            <button class="flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded bg-primary-500 hover:bg-primary-700">

              <span><?= $section->leftbuttontext() ?></span>
              <img src="/assets/icons/rightarrow.svg" alt="Dropdown arrow" class="w-5 h-5 ml-2">
            </button>
          </a>
        </div>
      </div>

      <!-- Right Box -->
      <div id="right-box" class="p-6 text-white bg-transparent rounded-lg ">
        <h3 class="mb-4 text-2xl font-goldman"><?= $section->righttitle() ?></h3>
        <ul class="space-y-4">
          <?php foreach ($section->rightadvantages()->toStructure() as $disadvantage): ?>
            <li class="flex items-center pl-8">
              <svg class="w-6 h-6 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
              <span><?= $disadvantage->disadvantage() ?></span>
            </li>
          <?php endforeach ?>
        </ul>
        <div class="mt-6">
          <a href="<?= $section->rightbuttonlink() ?>">
            <button class="flex items-center justify-center w-full px-4 py-2 font-bold text-[#FF5630] bg-transparent rounded border border-[#FF5630] ">

              <span><?= $section->rightbuttontext() ?></span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24">
                <path fill="#FF5630" fill-rule="evenodd" d="M7.91 3.23L3.23 7.913v-.01a.8.8 0 0 0-.23.57v7.054c0 .22.08.42.23.57L7.9 20.77c.15.15.36.23.57.23h7.06c.22 0 .42-.08.57-.23l4.67-4.673a.8.8 0 0 0 .23-.57V8.473c0-.22-.08-.42-.23-.57L16.1 3.23a.8.8 0 0 0-.57-.23H8.48c-.22 0-.42.08-.57.23M12 7a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0V8a1 1 0 0 1 1-1m-1 9a1 1 0 0 1 1-1h.008a1 1 0 1 1 0 2H12a1 1 0 0 1-1-1" clip-rule="evenodd" />
              </svg>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>