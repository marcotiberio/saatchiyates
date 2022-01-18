<!-- META TAGS -->

<?= Html::tag('title', [$metatitle]).PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "description", "content" => $metadesc]).PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "keywords", "content" => $metakeywords]).PHP_EOL ?>

<?= Html::tag('meta', null, ["property" => "og:title", "content" => $metatitle]).PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:type", "content" => $metafbtype]).PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:site_name", "content" => $metafbsitename]).PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:url", "content" => $metaurl]).PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:image", "content" => $metaimage ]).PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:description", "content" => $metadesc]).PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:locale", "content" => $metafblocale]).PHP_EOL ?>

<?= Html::tag('meta', null, ["name" => "robots", "content" => $metarobots]).PHP_EOL ?>
