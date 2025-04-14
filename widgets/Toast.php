<?php
namespace app\widgets;

use Yii;

class Toast extends \yii\base\Widget
{
    public $message;
    public $type = 'info'; // info, success, warning, error
    public $duration = 3000; // Duration in milliseconds

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Default message';
        }
    }

    public function run()
    {
        $script = <<<JS
            toast.show()
        JS;

        $content = <<<HTML
        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        HTML;

        Yii::$app->view->registerJs($script);

        return $content;
    }
}