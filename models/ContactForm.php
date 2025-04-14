<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\VarDumper;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required'],
            ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Nombre',
            'email' => 'Email',
            'body' => 'Mensaje',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function send()
    {
        $targetEmail = [
            Yii::$app->params['adminEmail'] => Yii::$app->params['adminName'],
        ];

        $senderEmail = [
            $this->email => $this->name,
        ];

        $subject = 'Nuevo mensaje de contacto desde el sitio web';

        $mailer = Yii::$app->mailer->compose()
            ->setTo($targetEmail)
            ->setFrom($senderEmail)
            ->setSubject($subject)
            ->setTextBody($this->body);

        $result = $mailer->send();

        return $result;
    }
}
