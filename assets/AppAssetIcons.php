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
class AppAssetIcons extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [
        'global/vendor/asrange/asRange.css',
        'assets/examples/css/uikit/icon.css',

    ];
    public $js = [
        //Plugin
        'global/vendor/asrange/jquery-asRange.min.js',

        //Scripts
        'assets/examples/js/uikit/icon.js',

    ];
    public $depends = [

    ];
}
