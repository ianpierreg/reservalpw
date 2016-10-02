<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetBootstrap extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [
        'global/css/bootstrap.css',
        'global/css/bootstrap-extend.css',
        'assets/css/site.css',


    ];
    public $js = [


        //Core
       'global/vendor/jquery/jquery.js',
        'global/vendor/bootstrap/bootstrap.js',

        //Scripts
        'global/js/core.js',
        'assets/js/site.js',

        'global/vendor/modernizr/modernizr.js',
        'global/vendor/breakpoints/breakpoints.js',
    ];
    public $depends = [
       // 'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
       // 'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $jsOptions = [ 'position' => \yii\web\View::POS_HEAD ];
}