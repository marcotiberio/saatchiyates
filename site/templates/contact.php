<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body>
  <div class="page padding-100-mobile"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="contact container">
      <div class="flex-column">
        <div class="item c2 no-padding">
          <div class="contact-detail"> 
            <div>Contact</div>
            <h4><?= $site->address()->kirbytextinline() ?></h4> 
            <div>Opening hours</div>
            <h4><?= $site->openingHours()->kirbytextinline() ?></h4> 
            <div class="columns-2-layout">
              For all enquiries<br/><br/>
              <?= $site->contact()->kirbytextinline() ?><br/>
              <?= $site->email()->kirbytextinline() ?><br/>
              <span class="spacing-mobile">
                For press enquiries<br/><br/><?= $site->pressEmail()->kirbytextinline() ?>
              </span>
            </div>
            <div class="stay-in-touch">Stay in touch</div>
            <div>
              <a class="selected" href="http://eepurl.com/hejCUv">Join Mailing List</a>
              <div class="block-mobile l-20">
                <a class="selected" target="_blank" href="<?= $site->instagram()->html() ?>">Instagram</a>
              </div>
            </div>
          </div>
        </div> 
        <div class="item c2 no-padding">
          <?php if($file = $page->image()): ?>
            <img src="<?= $file->url() ?>" alt="">
          <?php endif ?>
        </div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
