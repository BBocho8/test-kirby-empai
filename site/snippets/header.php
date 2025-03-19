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

<body>

  <?php snippet('navbar') ?>

  <main class="main">