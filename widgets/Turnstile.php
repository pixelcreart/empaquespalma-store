<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;

class Turnstile extends Widget
{
    public $language;
    public $size;
    public $theme;
    public $appearance;
    public $disable;

    private $siteKey;

    public function init()
    {
        parent::init();
        $this->siteKey = Yii::$app->params['cloudflare']['siteKey'];
        $this->language = Yii::$app->language;
        $this->size = empty($this->size) ? 'normal' : $this->size;
        $this->theme = empty($this->theme) ? 'auto' : $this->theme;
        $this->appearance = empty($this->appearance) ? 'interaction-only' : $this->appearance;
        $this->disable = empty($this->disable) ? false : $this->disable;
    }

    public function run()
    {
        if ($this->disable) {
            return '';
        }

        $scriptSrc = 'https://challenges.cloudflare.com/turnstile/v0/api.js';

        $this->view->registerJsFile($scriptSrc, [
            'async' => true,
            'defer' => true,
        ]);

        $widget = <<<HTML
            <div class="cf-turnstile"
                data-sitekey="{$this->siteKey}"
                data-size="{$this->size}"
                data-language="{$this->language}"
                data-theme="{$this->theme}"
                data-appearance="{$this->appearance}"></div>
        HTML;

        return $widget;
    }
}