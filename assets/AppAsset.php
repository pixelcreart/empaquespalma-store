<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'css/styles.min.css',
    ];
    public $js = [
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        YII_ENV_PROD ? 'js/main.min.js' : 'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
