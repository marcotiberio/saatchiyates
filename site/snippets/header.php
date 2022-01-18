<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $page->title() ?> | <?= $site->title() ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
    <link rel="icon" type="image/png" href="<?= url('favicon-16x16.png') ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= url('favicon-32x32.png') ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= url('favicon-96x96.png') ?>" sizes="96x96">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

    <?= css([
      'assets/css/pyi6ych.css',
      'assets/css/normalize.css',
      'assets/css/skeleton.css',
      'assets/css/styles.css',
      'assets/css/slick.css',
      'assets/css/slideshows.css',
      'assets/css/swiper.css',
      'assets/css/fancybox.css',
      'assets/css/marquee.css',
      '@auto'
    ]) ?>

    <?= js([
      'assets/js/jquery-3.6.0.min.js',
      'assets/js/panzoom.min.js',
      'assets/js/slick.js',
      'assets/js/slideshows.js',
      'assets/js/swiper.js',
      'assets/js/main.js',
      '@auto'
    ]) ?>

  </head>
