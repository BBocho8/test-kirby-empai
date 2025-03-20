<div class="modules-container">
  <div class="flex flex-col ">

    <p class="home-main-text"><?= $page->MainTextModules() ?></p>
    <p class="home-sub-text">
      <span>
        <?= $page->SubText1Modules() ?>
      </span>
      <span>
        <?= $page->SubText2Modules() ?>
      </span>
    </p>
  </div>
  <div class="modules-container-buttons">
    <?php foreach ($page->Buttons()->toStructure() as $button): ?>
      <a href="#<?= $button->buttontext() ?>">

        <button>
          <img src="/assets/icons/home-buttons/<?= $button->icon() ?>.png" alt="<?= $button->icon() ?>">
          <?= $button->buttonText() ?>
        </button>
      </a>
    <?php endforeach ?>
  </div>
</div>