<?php

use app\models\Section;

/* @var $this yii\web\View */
/* @var $sections Section[] */

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
    <?php foreach ($sections as $i => $section):?>
    <div class="card my-4 p-2" style="border-radius: 40px;">
        <div class="card-body">
            <div class="row">
                <div class="col block-main">
                    <h2><?= $section->title ?></h2>
                    <img style="border-radius: 20px" data-src="<?= $section->image ?>" class="lazyload"
                         alt="<?= $section->title ?>" title="<?= $section->title ?>" width="100%">
                    <?php foreach ($section->list as $item): ?>
                    <h3><?= $item ?></h3>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

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
                        ->textInput(['placeholder' => 'Ваше имя'])
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