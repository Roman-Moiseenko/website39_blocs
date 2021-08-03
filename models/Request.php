<?php


namespace app\models;


use yii\base\Model;

class Request extends Model
{
    public $name;
    public $email;
    public $phone;

    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'string'],
            [['name', 'phone'], 'required', 'message' => 'Обязательное поле'],
        ];
    }

}