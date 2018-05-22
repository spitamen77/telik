<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
        // 'css/site.css',
        'css/bootstrap.css',
        'css/style.css',
        'css/font-awesome.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery.easing-1.3.min.js',
        'js/jquery.scrollTo-1.4.3.1-min.js',
        'js/shop.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
