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
class AppAssetPopover extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [
        'global/vendor/flag-icon-css/flag-icon.css',
        'global/vendor/webui-popover/webui-popover.css',
        'global/vendor/toolbar/toolbar.css',
    ];
    public $js = [

        //plugin
        'global/vendor/webui-popover/jquery.webui-popover.min.js',
        'global/vendor/toolbar/jquery.toolbar.min.js',

        //script
        'global/js/components/webui-popover.js',
        'global/js/components/toolbar.js',
        'assets/examples/js/uikit/tooltip-popover.js',

    ];
    public $depends = [

    ];


}
