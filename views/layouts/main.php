<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\ModalAlert;
use diincompany\commerce\widgets\whatsapp\WhatsAppModal;
use yii\bootstrap5\Html;

AppAsset::register($this);

$params = Yii::$app->params;

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $params['seo']['description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $params['seo']['keyword'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$this->registerMetaTag(['name' => 'author', 'content' => $params['seo']['author'] ?? 'La Burrita Loca']);
$this->registerMetaTag(['name' => 'robots', 'content' => $params['seo']['robots'] ?? 'index, follow']);

$this->registerMetaTag(['property' => 'og:title', 'content' => $params['seo']['opengraph']['title'] ?? $this->title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => $params['seo']['opengraph']['description'] ?? $params['seo']['description']]);
$this->registerMetaTag(['property' => 'og:image', 'content' => $params['seo']['opengraph']['image'] ?? '']);
$this->registerMetaTag(['property' => 'og:url', 'content' => $params['seo']['opengraph']['url'] ?? Yii::$app->request->absoluteUrl]);
$this->registerMetaTag(['property' => 'og:type', 'content' => $params['seo']['opengraph']['type'] ?? 'website']);

$this->registerMetaTag(['name' => 'twitter:card', 'content' => $params['seo']['twitter']['card'] ?? 'summary_large_image']);
$this->registerMetaTag(['name' => 'twitter:title', 'content' => $params['seo']['twitter']['title'] ?? $this->title]);
$this->registerMetaTag(['name' => 'twitter:description', 'content' => $params['seo']['twitter']['description'] ?? $params['seo']['description']]);
$this->registerMetaTag(['name' => 'twitter:image', 'content' => $params['seo']['twitter']['image'] ?? '']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$params['googleAnalytics']['key']?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?=$params['googleAnalytics']['key']?>');
    </script>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <?=$this->render('_navbar')?>
            <?=$content?>
        </main>
    </div>
    <?= $this->render('_footer') ?>
</div>

<?=WhatsAppModal::widget([
    'modalImg' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-90/logo-sm-ep.png',
])?>
<?=ModalAlert::widget()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
