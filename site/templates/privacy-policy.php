<?php snippet('header') ?>
<?= snippet('seo/meta') ?>
<?= snippet('seo/favicon') ?>

<body class="privacy-policy">
  <div class="page padding-100-mobile"> 

    <?php snippet('nav') ?>

    <!-- Page content -->
    <main class="container">
      <div class="privacy-policies-detail">
        <h4 class="header">Privacy Policies</h4>
        <div><?= $page->mainContent()->kirbytextinline() ?></div>
      </div>
    </main>

  </div>
<?php snippet('footer') ?>
