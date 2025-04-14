<?php
namespace app\widgets\whatsapp\models;

use Yii;
use yii\base\Model;

class WhatsAppModel extends Model {
    public $name;
    public $email;
    public $phone;
    public $address;
    public $orderType;
    public $orderDetails;
    public $whatsAppPhone;

    public function init()
    {
        parent::init();

        $this->whatsAppPhone = Yii::$app->params['whatsAppPhone'];
    }

    public function rules() {
        return [
            [['name', 'email', 'phone'], 'required'],
            ['email', 'email'],
            ['phone', 'string', 'max' => 15],
            ['address', 'string', 'max' => 255],
            ['orderType', 'in', 'range' => ['delivery', 'pickup']],
            ['orderType', 'default', 'value' => 'pickup'],
            ['orderDetails', 'string'],
        ];
    }

    public function attributeLabels() {
        return [
            'name' => Yii::t('app','Nombre'),
            'email' => Yii::t('app','Correo Electrónico'),
            'phone' => Yii::t('app','Teléfono'),
            'address' => Yii::t('app','Dirección'),
            'orderType' => Yii::t('app','Tipo de Pedido'),
            'orderDetails' => Yii::t('app','Detalles del Pedido'),
        ];
    }

    public function getWhatsAppLink() {
        $orderType = $this->orderType === 'delivery' ? 'Entrega a Domicilio' : 'Recoger en el Local';

        $message = "Hola, estoy interesado en hacer un pedido:\n";
        $message .= "*Nombre:* {$this->name}\n";
        $message .= "*Correo Electrónico:* {$this->email}\n";
        $message .= "*Teléfono:* {$this->phone}\n";
        $message .= "*Dirección:* {$this->address}\n";
        $message .= "*Tipo de Pedido:* {$orderType}\n";

        if($this->orderDetails)
            $message .= "*Detalles del Pedido:* {$this->orderDetails}\n";

        return "https://wa.me/{$this->whatsAppPhone}/?text=" . urlencode($message);
    }
}