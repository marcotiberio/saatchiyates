<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body>
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="news container">
      <div class="flex-column">
        <div class="item c1 no-padding">
          <div class="sub-title">
            <span>Happening now</span>
            <a class="align-right selected" href="<?= $site->instagram()->html() ?>" target="_blank">Follow us</a>
          </div>
        </div>
        <div class="item c-special-8 no-padding">
          <div class="featured">
            <?= $page->videoLink()->text() ?>
            <?php if($image = $page->featuredImage()->toFile()): ?>
              <img src="<?= $image->url() ?>" alt="">
            <?php endif ?>
          </div>
        </div>
        <div class="item c-special-4 no-padding">
          <div class="news-feature">
            <div><?= $page->featureTag()->text() ?></div> 
            <h2><?= $page->featureTitle()->text() ?></h2> 
            <p><?= $page->featureDescription()->kirbytextinline() ?></p> 
          </div>
        </div>
      </div>
      <div class="flex-column grid-960">
        <div class="item c1">
          <div class="more-btn">More<img src="<?= url('assets/img/Down.svg')?>"></div>
        </div>

        <?php foreach($page->children()->listed()->flip() as $post): ?>
          <div class="item c2">
            <a target="_blank" href="<?= $post->newsLink()->html() ?>">

              <?php foreach($post->videos() as $video): ?>
                <video class="video-element" autoplay loop muted>
                  <source src="<?= $video->url() ?>" type="video/mp4">
                  Your browser does not support HTML video.
                </video>
              <?php endforeach ?> 

              <?php if ($post->images()->isNotEmpty()) : ?>
                <img src="<?= $post->image()->url() ?>">
              <?php endif ?>

              <div class="caption">
                <span><?= $post->postTag()->text() ?></span>
                <span><?= $post->postDescription()->text() ?></span>
              </div>

            
            </a>
          </div>
        <?php endforeach ?>

      </div>
    </main>

  </div>
<?php snippet('footer') ?>
