<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body class="home">

<?php
  $images = $page->BackgroundImageDesktop()->toFiles();
  foreach($images as $image): ?>
  <div class="page desktop" style="background-image: url(<?= $image->url() ?>)">  
  <?php endforeach ?>



    <?php snippet('nav') ?>

    <!-- Page content -->  
    <main> 
      <div class="align-bottom desktop">
        <span><?= $page->exhibitonSubHeadlineDesktop()->html() ?></span>
        <span><?= $page->exhibitionDateDesktop()->html() ?></span>
        <h1 class="t-20"><?= $page->exhibitionNameDesktop()->html() ?></h1>
      </div>
    </main>

  </div>

  <?php
  $images = $page->BackgroundImageMobile()->toFiles();
  foreach($images as $image): ?>
  <div class="page mobile" style="background-image: url(<?= $image->url() ?>)">  
  <?php endforeach ?>



    <?php snippet('nav') ?>

    <!-- Page content -->  
    <main> 
      <div class="align-bottom mobile">
        <span><?= $page->exhibitonSubHeadlineMobile()->html() ?></span>
        <span><?= $page->exhibitionDateMobile()->html() ?></span>
        <h1 class="t-20"><?= $page->exhibitionNameMobile()->html() ?></h1>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
