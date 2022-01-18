<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body class="exhibition-archive">
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="exhibitions container">
    <div class="sub-title">Current</div>
      <div class="exhibitions-current-wrapper"><!-- Current Exhibition -->
        <?php
          $current =  $page->currentExhibitions()->toPages();
          foreach($current as $current): ?>
          <div class="item current">
            <div class="exhibition-info">
              <h2 class="top"><?= $current->name()->text() ?></h2>
              <div class="bottom">
                <span><?= $current->dates()->text() ?></span>
                <a class="link selected" href="<?= $current->url() ?>">View exhibition</a>
              </div>
            </div>
            <div class="swiper exhibitionSwiper">
              <div class="swiper-wrapper">
              <?php 
              $images =  $current->slideshow()->toFiles();
              foreach($images as $image): ?>
                <div class="swiper-slide">
                  <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                </div>
              <?php endforeach; ?>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        <?php endforeach ?>     
      </div><!-- Current Exhibition -->

      <div class="flex-column past-exhibitions"><!-- Past Exhibitions -->
        <div class="item c1 past-title">Past</div>
          <?php
          $past =  $page->pastExhibitions()->toPages();
          foreach($past as $past): ?>
          <div class="item">
            <h2><a class="link" href="<?= $past->url() ?>"><?= $past->name()->text() ?></a></h2>
            <span><?= $past->dates()->text() ?></span>
            <span><?= $past->exhibitionType()->text() ?></span>
          </div>
          <?php endforeach ?>
      </div><!-- Past Exhibitions -->
    </main>
  </div>
<?php snippet('footer') ?>
