<?php
namespace app\controllers;

use app\widgets\whatsapp\models\WhatsAppModel;
use Yii;
use yii\web\Controller;

class ContactController extends Controller {
    public function actionMessage()
    {
        $post = Yii::$app->request->post();

        if($post) {
            $model = new WhatsAppModel();

            $model->load($post);

            return $this->redirect($model->getWhatsAppLink());
        }

        return $this->redirect('/');
    }
}