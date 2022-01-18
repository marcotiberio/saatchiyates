<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body>
  <div class="page padding-100-mobile"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="private-sales container">
      <div class="flex-column">
        <div class="item c2 no-padding">
          <div class="video-container">
            <?php foreach($page->videos() as $video): ?>
            <video class="video-element" autoplay loop muted>
              <source src="<?= $video->url() ?>" type="video/mp4">
              Your browser does not support HTML video.
            </video>
            <?php endforeach ?>
          </div>
        </div>

        <div class="item c2 no-padding">
          <div class="private-sales-detail">
            <div>Private Sales</div>
            <h4><?= $page->mainContent()->html() ?></h4>
            <div class="current-on-view">Currently on view</div>
            <h4><?= $page->currentOnView()->html() ?></h4>
            <div class="columns-2-layout">
              <h4>
                <?= $page->artistList()->kirbytextinline() ?>
              </h4>
            </div>
            <div class="for-all-enquiries">For all enquiries contact</div>
            <div>
              <a class="selected" href="mailto:<?= $site->privateSalesEmail()->html() ?>?subject=Enquirie" target="_blank">
                <?= $site->privateSalesEmail()->html() ?>
              </a>
              <div class="block-mobile l-20"><a class="selected" href="<?= $site->whatsApp()->html() ?>" target="_blank">via Whatsapp</a></div>
            </div>
          </div>  
        </div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
