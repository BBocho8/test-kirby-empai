<div class=" bg-empaiBlack">
  <div class="flex justify-center max-w-6xl px-8 mx-auto py-36">

    <!-- Form - left side -->
    <div id="left-div" class="w-1/2">
      <h2 class="text-4xl text-white font-goldman"><?= $section->sectionTitle() ?></h2>
      <p class="pl-2 pr-16 my-2 text-2xl text-white font-extralight"><?= $section->sectionSubtitle() ?></p>

      <div class="flex flex-col gap-4 pl-2 pr-16 my-4">

        <input type="text" placeholder="<?= $section->input1() ?>" class="px-3 py-3 text-white border border-white rounded bg-empaiBlack">
        <input type="text" placeholder="<?= $section->input2() ?>" class="px-3 py-3 text-white border border-white rounded bg-empaiBlack">
        <select name="industry" id="industry-select" class="px-3 py-3 text-white border border-white rounded bg-empaiBlack" aria-placeholder="<?= $section->input3() ?>">
          <option value="" disabled selected><?= $section->input3() ?></option>
          <option value="industry1">Industry1</option>
          <option value="industry2">Industry2</option>
          <option value="industry3">Industry3</option>
          <option value="industry4">Industry4</option>
        </select>
      </div>

      <div class="pl-2 pr-16">

        <a href="#">
          <button class="flex items-center justify-center w-full px-4 py-3 mt-8 font-bold bg-white rounded text-empaiBlack ">
            <span><?= $section->leftButtonText() ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24">
              <path fill="none" stroke="#212b36" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5m0 0l-5-5" />
            </svg>
          </button>
        </a>
      </div>
    </div>

    <!-- For - right side -->

    <div id="right-div" class="bg-[#2D3742] border border-primary p-8 rounded w-1/2 flex flex-col gap-2 justify-between">
      <div>
        <p class="text-white font-goldman text-8xl"><?= $section->rightBoxMainNumber() ?></p>
        <p class="text-5xl font-goldman text-primary"><?= $section->rightBoxSubNumber() ?></p>
      </div>
      <p class="text-xl text-white"><?= $section->rightBoxDescription() ?></p>
      <a href="#">
        <button class="flex items-center justify-center px-4 py-2 mt-8 font-bold bg-transparent border rounded border-primary text-primary">
          <span><?= $section->rightButtonText() ?></span>
        </button>
      </a>
    </div>
  </div>
</div>