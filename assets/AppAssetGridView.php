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
class AppAssetGridView extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/remark';

    public $css = [
//responsive table bootstrap
        'global/vendor/bootstrap-table/bootstrap-table.css',


    ];
    public $js = [
        //Plugins
        'global/vendor/peity/jquery.peity.min.js',

        'global/vendor/bootstrap-table/bootstrap-table.min.js',
        'global/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js',

        //Script
        'global/js/components/peity.js',
        'global/js/plugins/selectable.js',
        'global/js/components/selectable.js',
        'global/js/components/table.js',
        'assets/examples/js/charts/peity.js',
        //-Responsive Table
        'base/assets/examples/js/tables/bootstrap.js',
    ];

}
