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
class AppAssetDatePicker extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [
        'global/vendor/bootstrap-datepicker/bootstrap-datepicker.css',
        'global/vendor/bootstrap-maxlength/bootstrap-maxlength.css',
        'global/vendor/jt-timepicker/jquery-timepicker.css',
    ];
    public $js = [

        //Plugins
        'global/vendor/bootstrap-datepicker/bootstrap-datepicker.js',
        'global/vendor/jt-timepicker/jquery.timepicker.min.js',

        'global/vendor/bootstrap-datepicker/bootstrap-datepicker.pt-BR.js',

        //Scripts
        'global/js/components/bootstrap-datepicker.js',
        '../../js/custom.js',

    ];
    public $depends = [

    ];
}