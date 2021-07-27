<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Моисеенко Роман Александрович">
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="<?= Html::encode($this->title) ?>">
    <meta property="og:image" content="<?= \Yii::$app->params['hostInfo'] . '/images/logo-admin.jpg' ?>">
    <meta property="og:url" content="<?= \Yii::$app->params['hostInfo'] ?>">

    <?php if (isset($this->params['canonical'])) {
        echo '<meta property="og:url" content="' . $this->params['canonical'] . '">' . PHP_EOL;
        echo '<link rel="canonical" href="' . $this->params['canonical'] . '">' . PHP_EOL;
    } else {
        echo '<meta property="og:url" content="' . \Yii::$app->params['hostInfo'] . '">' . PHP_EOL;
        echo '<link rel="canonical" href="' . \Yii::$app->params['hostInfo'] . '">' . PHP_EOL;
    }?>

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script src="/js/lazysizes.min.js"></script>
    <script defer type="text/javascript">
        var fired = false;
        window.addEventListener('scroll', () => {
            if (fired === false) {
                fired = true;
                setTimeout(() => {
                    (function (m, e, t, r, i, k, a) {
                        m[i] = m[i] || function () {
                            (m[i].a = m[i].a || []).push(arguments)
                        };
                        m[i].l = 1 * new Date();
                        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                    })
                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
                    ym(90000000, "init", {
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                    window.dataLayer = window.dataLayer || [];
                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());
                    gtag('config', '<?= \Yii::$app->params['GoogleAnalyticAPI'] ?>');
                }, 1500)
            }
        });
    </script>
    <div><img src="https://mc.yandex.ru/watch/90000000" style="position:absolute; left:-9999px;" alt="Яндекс Метрика"/></div>
    <script defer src="https://www.googletagmanager.com/gtag/js?id=<?= \Yii::$app->params['GoogleAnalyticAPI'] ?>"></script>

</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>



<main role="main" class="flex-shrink-0">
    <div class="content-container">
        <?= \yii\widgets\Breadcrumbs::widget([
            'options' => ['class' => 'breadcrumb-site'],
            'homeLink' => [
                'label' => 'Главная',
                'url' => Yii::$app->homeUrl,
                'title' => 'На главную',
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</main>

<?= $this->render('footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
