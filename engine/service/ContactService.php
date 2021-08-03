<?php


use yii\mail\MailerInterface;

class ContactService
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
    public function sendRequest($name, $phone) //Заявка на разработку сайта
    {

        $send = $this->mailer->compose('lockObject', ['name' => $name, 'phone' => $phone])
            ->setTo(\Yii::$app->params['emailRequest'])
            ->setFrom([\Yii::$app->params['supportEmail'] => 'Блокировка'])
            ->setSubject('Заявка на разработку сайта')
            ->send();
        if (!$send) {
            throw new \DomainException('Ошибка отправки');
        }
    }
}