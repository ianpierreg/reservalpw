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
class AppAssetMasks extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [

        //Plugins
        'base/assets/examples/css/forms/masks.css'

    ];
    public $js = [

        // Plugins -->
        'global/vendor/formatter-js/jquery.formatter.js',

        //Scripts
        'global/js/components/formatter-js.js',


    ];
    public $depends = [

    ];
}