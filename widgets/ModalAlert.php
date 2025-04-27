<?php
namespace app\widgets;

use Yii;

class ModalAlert extends \yii\base\Widget
{
    public function run()
    {
        $session = Yii::$app->session;
        $modal = '';

        $message = '';

        foreach($session->getAllFlashes() as $key => $value) {
            $type = $key;
            $message = $value;
        }

        $session->removeAllFlashes();

        if(!empty($message)) {
            $script = <<<JS
                const modal = new bootstrap.Modal(document.getElementById('alert-error'), {
                    backdrop: 'static',
                    keyboard: false
                });
                
               modal.show();
            JS;

            $modal = <<<HTML
                <div id="alert-error" class="modal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center">
                                $message
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            HTML;

            Yii::$app->view->registerJs($script, \yii\web\View::POS_READY);
        }

        return $modal;
    }
}