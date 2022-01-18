<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body class="artist-archive">
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="artists">
      <div class="flex-column">

        <div class="item c2 no-padding">
          <div class="sub-title desktop">Artists</div>
          <div class="artists-list">
            <?php foreach($page->children()->listed()->sortBy('lastName', 'asc',) as $artist): ?>
              <div class="link" >
                <h2>
                  <a href="<?= $artist->url() ?>">
                    <?= $artist->firstName()->text() ?> <?= $artist->lastName()->text() ?>
                  </a>
                </h2>
                <span><?= $artist->bios()->text() ?></span>
              </div>
            <?php endforeach ?>
          </div> 
        </div>

        <div class="flex-artists item c2 no-padding item-relative">
          <?php
          $coverImage = $page->coverImage()->toFiles();
          foreach($coverImage as $coverImage): ?>
            <?php if ($coverImage->isNotEmpty()): ?>
              <?php if($coverImage->orientation()==="portrait"): ?>
                <img class="artists-list-img portrait-img" src="<?= $coverImage->resize(null, null, 90)->url() ?>">
              <?php else: ?>
                <img class="artists-list-img" src="<?= $coverImage->resize(null, null, 90)->url() ?>">
              <?php endif ?>
            <?php endif ?>
          <?php endforeach ?>            
        </div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
