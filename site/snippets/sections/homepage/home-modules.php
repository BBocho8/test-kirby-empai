<div class="modules-container">
  <div class="flex flex-col ">

    <p class="home-main-text"><?= $page->MainText() ?></p>
    <p class="home-sub-text">
      <span>
        <?= $page->SubText1() ?>
      </span>
      <span>
        <?= $page->SubText2() ?>
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