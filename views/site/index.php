<?php

/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;

$this->title = 'Заказать сайт в Калининграде от разработчика сайтов';

$description = 'Создадим любой сложности сайт на заказ с подключением онлайн платежей, смс-уведомлений и яндекс карт. ';
$this->registerMetaTag(['name' => 'description', 'content' => $description]);
$this->registerMetaTag(['name' => 'og:description', 'content' => $description]);
?>
<div class="item-responsive item-2-80by1">
    <div class="content-item">
        <img data-src="/images/main_land.jpg" class="lazyload" alt="Заказать сайт в Калининграде" width="100%">
        <div class="container">
            <div class="carousel-caption">
                <h1 class="landing-h1">Заказать сайт в Калининграде</h1>
            </div>
        </div>
    </div>
</div>
<div class="container py-4">
    <div class="card my-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 block-main">
                    <h2>Разработка сайта компании</h2>
                    <h3>Функционал под специфику Вашего бизнеса</h3>
                    <h3>Удобный и интуитивно понятный интерфейс</h3>
                    <h3>Мобильная версия Вашего сайта</h3>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 20px" data-src="/images/longpage_01.jpg" class="lazyload"
                         alt="Разработка сайта компании" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img style="border-radius: 20px" data-src="/images/longpage_02.jpg" class="lazyload"
                         alt="Разработка CRM-систем" width="100%">
                </div>
                <div class="col-md-8 block-main">
                    <h2>Разработка CRM-систем</h2>
                    <h3>Создание закрытых CRM-систем</h3>
                    <h3>Функционал любой сложности</h3>
                    <h3>Срок разработки от 2 до 6 месяцев</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 block-main">
                    <h2>Подключение онлайн-платежей</h2>
                    <h3>Подключим Ю-Кассу</h3>
                    <h3>Настроим отчетность интернет платежей</h3>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 20px" data-src="/images/longpage_03.jpg" class="lazyload"
                         alt="Подключение онлайн-платежей" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img style="border-radius: 20px" data-src="/images/longpage_04.jpg" class="lazyload"
                         alt="Расширенный функционал сайта" width="100%">
                </div>
                <div class="col-md-8 block-main">
                    <h2>Расширенный функционал сайта</h2>
                    <h3>СМС-уведомления</h3>
                    <h3>Чат на сайте</h3>
                    <h3>Форум и комментарии к страницам</h3>
                    <h3>Мультиязычность</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 block-main">
                    <h2>Яндекс карта, геолокация</h2>
                    <h3>Подключение API Яндекс карты</h3>
                    <h3>Поиск по карте</h3>
                    <h3>Построение маршрутов</h3>
                    <h3>Добавление собственных областей</h3>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 20px" data-src="/images/longpage_05.jpg" class="lazyload"
                         alt="Яндекс карта, геолокация" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img style="border-radius: 20px" data-src="/images/longpage_06.jpg" class="lazyload"
                         alt="Оптимизация сайта под поисковики" width="100%">
                </div>
                <div class="col-md-8 block-main">
                    <h2>Оптимизация сайта под поисковики</h2>
                    <h3>SEO-оптимизация сайта</h3>
                    <h3>Настройка Заголовков и Описания</h3>
                    <h3>ЧПУ ссылки</h3>
                    <h3>Подключение мета-тегов schema.org</h3>
                    <h3>Оптимизация быстрой загрузки PageSpeed Insights</h3>
                </div>
            </div>
        </div>
    </div>

    <!--div class="card mt-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Наши проекты</h2>
                </div>
            </div>
        </div>
    </div-->
    <hr/>
    <div class="card mt-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4  block-main" style="text-align: center">
                    <h2>Заказать сайт</h2>

                    <?php $form = ActiveForm::begin([
                        'enableClientValidation' => false,
                    ]); ?>
                    <?= $form->field($model, 'name')
                        ->textInput(['autofocus' => true, 'placeholder' => 'Ваше имя'])
                        ->label(false) ?>
                    <?= $form->field($model, 'phone')
                        ->textInput(['placeholder' => 'Телефон'])
                        ->label(false) ?>

                    <div class="form-group">
                        <div class="d2-btn-box">
                            <button class="d2-btn d2-btn-lg d2-btn-block d2-btn-main" type="submit" name="login-button">
                                <div class="d2-btn-caption">Отправить заявку</div>
                                <div class="d2-btn-icon">
                                    <i class="far fa-paper-plane"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>