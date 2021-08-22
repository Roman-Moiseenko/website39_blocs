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
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="copyright" content="Моисеенко Роман Александрович">
    <title><?= \yii\helpers\Html::encode($this->title) ?></title>
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="<?= Html::encode($this->title) ?>">
    <meta property="og:image" content="<?= \Yii::$app->params['hostInfo'] . '/images/logo-admin.jpg' ?>">
    <?php if (isset($this->params['canonical'])) {
        echo '<meta property="og:url" content="' . $this->params['canonical'] . '">' . PHP_EOL;
        echo '<link rel="canonical" href="' . $this->params['canonical'] . '">' . PHP_EOL;
    } else {
        echo '<meta property="og:url" content="' . \Yii::$app->params['hostInfo'] . '">' . PHP_EOL;
        echo '<link rel="canonical" href="' . \Yii::$app->params['hostInfo'] . '">' . PHP_EOL;
    }?>

    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <meta name="yandex-verification" content="a41f93f3452930c1" />
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
                    ym(83396419, "init", {
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
    <div><img src="https://mc.yandex.ru/watch/83396419" style="position:absolute; left:-9999px;" alt="Яндекс Метрика"/></div>
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
<script type="text/javascript">
    let giftofspeed1 = document.createElement('link');
    giftofspeed1.rel = 'stylesheet';
    giftofspeed1.href = 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700&display=swap';
    giftofspeed1.type = 'text/css';
    let godefer1 = document.getElementsByTagName('link')[0];
    godefer1.parentNode.insertBefore(giftofspeed1, godefer1);

    let giftofspeed2 = document.createElement('link');
    giftofspeed2.rel = 'stylesheet';
    giftofspeed2.href = 'https://use.fontawesome.com/releases/v5.15.1/css/all.css';
    giftofspeed2.type = 'text/css';
    let godefer2 = document.getElementsByTagName('link')[0];
    godefer2.parentNode.insertBefore(giftofspeed2, godefer2);
</script>
</body>
</html>
<?php $this->endPage() ?>
