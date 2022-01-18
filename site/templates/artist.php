<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body class="artist-single artist-<?= $page->lastName()->text() ?>">
  <div class="page"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="artist-detail container">
      <div class="flex-column">
        <div class="item c-special-2 side-divider">
          <div class="sub-title">
            <a class="index-btn" href="<?= url('artists') ?>"><img src="<?= url('assets/img/Previous.svg')?>">Artists</a>
            <div class="side-info">
              <h2><?= $page->firstName()->text() ?> <?= $page->lastName()->text() ?></h2>
              <div class="info">
                <div><?= $page->bios()->text() ?></div>
                <div class="info-bottom">
                  <a id="bio-btnSide" class="bio-btn selected" href="#">Biography</a>
                  <?php foreach ($page->files()->filterBy('template', 'cv') as $cv): ?>
                  <a class="selected l-20 cv" target="_blank" href="<?= $cv->url() ?>">Download CV</a>
                  <?php endforeach ?>
                  <a id="qr-btnSide" class="selected l-20" href="#"><?= $page->additionalDropdownLabel()->kirbytextinline() ?></a>
                </div>
              </div>
              <div class="bio-container-side">
                <p><?= $page->biosDetail()->kirbytextinline() ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="item c-special-8 column-centre">
          <div class="gallery-container">
            <div class="artist-profile">
              <h1><?= $page->firstName()->text() ?> <?= $page->lastName()->text() ?></h1>
              <div class="info">
                <div><?= $page->bios()->text() ?></div>
                <div class="t-80">
                  <a id="bio-btnCenter" class="selected" href="#">Biography</a>
                  <?php foreach ($page->files()->filterBy('template', 'cv') as $cv): ?>
                  <a class="selected l-40 cv" target="_blank" href="<?= $cv->url() ?>">Download CV</a>
                  <a id="qr-btn" class="selected l-40" href="#"><?= $page->additionalDropdownLabel()->kirbytextinline() ?></a>
                  <?php endforeach ?>
                  </div>
              </div>
              <div class="bio-container-center">
                <p><?= $page->biosDetail()->kirbytextinline() ?></p>
              </div>
              <div class="qr-container">
                <p><?= $page->additionalDropdown()->kirbytextinline() ?></p>
              </div>
            </div>
            <?php foreach ($page->images()->filterBy('template', 'profile') as $image): ?>
              <img class="profile-pic" src="<?= $image->url() ?>">
            <?php endforeach ?>
          </div>

          <div class="flex-column t-40">
            <?php
            $imageGallery =  $page->gallery()->toFiles();
            foreach($imageGallery as $imageGallery): ?>
              <div class="item <?= $imageGallery->Column() ?> w1">
                <a href="<?= $imageGallery->resize(null, null, 60)->url() ?>" data-fancybox="gallery" data-src="<?= $imageGallery->resize(null, null, 60)->url() ?>">
                  <img src="<?= $imageGallery->resize(null, null, 60)->url() ?>" alt="<?= $imageGallery->alt() ?>">
                  <div class="caption">
                    <div><?= $imageGallery->caption() ?></div>
                    <div><?= $imageGallery->description() ?></div>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>
          
        </div>

        <div class="item c-special-1 desktop column-right">
          <div>View as</div>
          <div class="t-10">
            <span class="view-stack-btn"><img class="active" src="<?= url('assets/img/View-Stack.svg')?>"></span>
            <span class="view-index-btn l-10"><img src="<?= url('assets/img/View-Index.svg')?>"></span>       
          </div> 
        </div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>

  