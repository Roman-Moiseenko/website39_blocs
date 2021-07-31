<?php

use yii\helpers\Html;
use yii\helpers\Url; ?>

<footer class="pb-2">
    <div class="container">
        <hr>
        <p>
            Разработано <a href="mailto:koenigs.ru@gmail.com"
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
                    <meta itemprop="name" content="ООО Кёнигс.РУ">
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


