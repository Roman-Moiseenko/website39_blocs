<?php
namespace app\commands;


use yii\mail\MailerInterface;

class ContactService
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct()
    {
        $this->mailer = \Yii::$app->mailer;
    }
    public function sendRequest($name, $phone) //Заявка на разработку сайта
    {

        $send = $this->mailer->compose('sendRequest', ['name' => $name, 'phone' => $phone])
            ->setTo(\Yii::$app->params['emailRequest'])
            ->setFrom([\Yii::$app->params['supportEmail'] => 'Разработка'])
            ->setSubject('Заявка на разработку сайта')
            ->send();
        if (!$send) {
            throw new \DomainException('Ошибка отправки');
        }
    }
}