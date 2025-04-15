<?php
namespace app\widgets\whatsapp;

use app\widgets\whatsapp\models\WhatsAppModel;
use yii\base\Widget;

class WhatsAppModal extends Widget
{
    public $model;

    public function init()
    {
        parent::init();
        $this->model = new WhatsAppModel();
    }

    public function run()
    {
        return $this->render('modal', [
            'model' => $this->model,
        ]);
    }
}