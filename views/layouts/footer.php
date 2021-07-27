<?php

use yii\helpers\Html;
use yii\helpers\Url; ?>

<footer class="pb-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <label class="footer-title">Информация</label>
                <ul class="list-unstyled">
                    <li><a href="<?= Html::encode(Url::to(['/about'])) ?>">О сайте</a></li>
                    <li><a href="<?= Html::encode(Url::to(['/contacts'])) ?>" rel="nofollow">Контакты</a></li>
                    <li><a href="<?= Html::encode(Url::to(['/projects'])) ?>">Наши проекты</a></li>
                </ul>
            </div>

            <div class="col-sm-43">

            </div>
            <div class="col-sm-4">
                <label class="footer-title">Услуги</label>
                <ul class="list-unstyled">
                    <li><a href="<?= Url::to(['/cars']) ?>"><h3>Разработка СРМ</h3></a></li>
                    <li><a href="<?= Url::to(['/tours']) ?>"><h3>Порталы</h3></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="float-right d-none d-sm-inline">
            <?= Html::a('Стать Провайдером услуг', \Yii::$app->params['adminHostInfo'], ['rel' => 'nofollow']) ?>
        </div>
        <p>
            <a href="https://www.instagram.com/koenigs.ru" target="_blank" rel="nofollow">
                <img src="https://static.koenigs.ru/cache/files_contacts/list_3.png" alt="Инстаграм koenigs.ru" title="Инстаграм koenigs.ru" width="20px" height="20px"/> koenigs.ru
            </a>
            <a href="https://vk.com/koenigsru" target="_blank"  rel="nofollow">
                <img src="https://static.koenigs.ru/cache/files_contacts/list_4.png" alt="Вконтакте koenigs.ru" title="Вконтакте koenigs.ru" width="20px" height="20px"/> koenigsru
            </a>
            <?= Lang::t('Разработано') ?> <a href="mailto:koenigs.ru@gmail.com"
                                             target="_blank" rel="=nofollow">ООО Кёнигс.РУ</a>
            &copy; 2020-<?= date('Y', time())?> Все права защищены
        </p>
        <div>
            <div>
                <div itemscope itemtype="https://schema.org/Organization">
                    <link itemprop="url" href="<?= \Yii::$app->params['hostInfo'] ?>"/>
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <link itemprop="contentUrl" href="<?= \Yii::$app->params['hostInfo'] . '/images/logo-admin.jpg'; ?>" />
                    </div>
                    <span itemprop="name">ООО "Кёнигс.РУ"</span>
                    <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                        <meta itemprop="streetAddress" content="<?= \Yii::$app->params['address']['streetAddress'] ?>">
                        <meta itemprop="postalCode" content="<?= \Yii::$app->params['address']['postalCode'] ?>">
                        <span itemprop="addressLocality"><?= \Yii::$app->params['address']['addressLocality'] ?></span>
                    </div>
                    Телефон:<span itemprop="telephone">+7-911-471-0701</span>,
                    E-mail: <span itemprop="email">koenigs.ru@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
</footer>


