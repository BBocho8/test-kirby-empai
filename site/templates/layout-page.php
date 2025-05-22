<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

  <?= css([
    'assets/fonts/goldman/index.css',
    'assets/fonts/manrope/index.css',
    'assets/css/index.css',
    '@auto'
  ]) ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
  <?php snippet('cookieconsentCss') ?>
</head>

<body class="pt-0">
  <?php
  // Check if we have a fixed navbar in any layout
  $hasFixedNavbar = false;
  if ($page->layout()->isNotEmpty()) {
    foreach ($page->layout()->toLayouts() as $layout) {
      foreach ($layout->columns() as $column) {
        foreach ($column->blocks() as $block) {
          if ($block->type() === 'navbar' && $block->position()->value() === 'fixed') {
            $hasFixedNavbar = true;
            break 3;
          }
        }
      }
    }
  }
  ?>

  <main class="min-h-screen ">
    <?php if ($page->layout()->isNotEmpty()): ?>
      <?php foreach ($page->layout()->toLayouts() as $layout): ?>
        <section class="mx-auto">
          <div class="grid grid-cols-12 gap-6">
            <?php foreach ($layout->columns() as $column): ?>
              <?php
              $width = $column->width();
              $span = [
                '1/1' => 'col-span-12',
                '1/2' => 'col-span-6',
                '1/3' => 'col-span-4',
                '2/3' => 'col-span-8',
                '1/4' => 'col-span-3',
                '3/4' => 'col-span-9',
                'full' => 'col-span-12'
              ][$width] ?? 'col-span-12';
              ?>

              <div class="<?= $span ?>">
                <?php foreach ($column->blocks() as $block): ?>
                  <?php
                  // Skip rendering if block is hidden
                  if ($block->isHidden()) continue;

                  // Special handling for navbar block
                  if ($block->type() === 'navbar'): ?>
                    <?php snippet('blocks/navbar', [
                      'menu_items' => $block->menu_items()->toStructure(),
                      'position' => $block->position(),
                      'logo' => $block->logo()->toFile(), // Add this line
                      'logo_size' => $block->logo_size(), // Add this line
                      'show_contact_button' => $block->show_contact_button(),
                      'contact_button_text' => $block->contact_button_text(),
                      'show_language_switcher' => $block->show_language_switcher(),
                      'page' => $page,
                      'site' => $site // Add this for site-wide data access
                    ]) ?>
                    <?php continue; ?>
                  <?php endif; ?>

                  <?php if ($block->type() === 'hero'): ?>
                    <?php snippet('blocks/hero', ['block' => $block, 'page' => $page]) ?>
                    <?php continue; ?>
                  <?php endif; ?>

                  <div class="block mb-8 last:mb-0">
                    <?php
                    // Handle different block types
                    switch ($block->type()) {
                      case 'text':
                      case 'markdown':
                        echo $block->text()->kt();
                        break;
                      case 'heading':
                        echo "<{$block->level()->value()}>{$block->text()->esc()}</{$block->level()->value()}>";
                        break;
                      default:
                        echo $block;
                    }
                    ?>
                  </div>
                <?php endforeach ?>
              </div>

            <?php endforeach ?>
          </div>
        </section>
      <?php endforeach ?>
    <?php else: ?>
      <div class="container px-4 py-16 mx-auto text-center">
        <p class="text-gray-500">No layout content found.</p>
      </div>
    <?php endif ?>
  </main>

  <?php snippet('footer') ?>
</body>

</html>