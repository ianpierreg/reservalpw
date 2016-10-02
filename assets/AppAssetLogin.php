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
class AppAssetLogin extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [
        'global/css/bootstrap.css',
        'global/css/bootstrap-extend.css',
        'assets/css/site.css',

        //Plugins
        'global/vendor/animsition/animsition.css',
        'global/vendor/asscrollable/asScrollable.css',
        'global/vendor/switchery/switchery.css',
        'global/vendor/intro-js/introjs.css',
        'global/vendor/slidepanel/slidePanel.css',
        'global/vendor/flag-icon-css/flag-icon.css',
        'assets/css/login.css',

        //Fonts
        'global/fonts/web-icons/web-icons.css',
        'global/fonts/brand-icons/brand-icons.css',
        'http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic',

    ];
    public $js = [

        'global/vendor/modernizr/modernizr.js',
        'global/vendor/breakpoints/breakpoints.js',

        //Core
        'global/vendor/jquery/jquery.js',
        'global/vendor/bootstrap/bootstrap.js',
        'global/vendor/animsition/animsition.js',
        'global/vendor/asscroll/jquery-asScroll.js',
        'global/vendor/mousewheel/jquery.mousewheel.js',
        'global/vendor/asscrollable/jquery.asScrollable.all.js',
        'global/vendor/ashoverscroll/jquery-asHoverScroll.js',

        //Plugins
        'global/vendor/switchery/switchery.js',
        'global/vendor/intro-js/intro.js',
        'global/vendor/screenfull/screenfull.js',
        'global/vendor/slidepanel/jquery-slidePanel.js',
        'global/vendor/jquery-placeholder/jquery.placeholder.js',

        //Scripts
        'global/js/core.js',
        'assets/js/site.js',
        'assets/js/sections/menu.js',
        'assets/js/sections/menubar.js',
        'assets/js/sections/gridmenu.js',
        'assets/js/sections/sidebar.js',
        'global/js/configs/config-colors.js',
        'assets/js/configs/config-tour.js',
        'global/js/components/asscrollable.js',
        'global/js/components/animsition.js',
        'global/js/components/slidepanel.js',
        'global/js/components/switchery.js',
        'global/js/components/jquery-placeholder.js',
        'global/js/components/material.js',


        'global/js/init.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
