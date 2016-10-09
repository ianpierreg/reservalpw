<?php
/**
 * Created by PhpStorm.
 * User: ianpierre
 * Date: 07/10/16
 * Time: 14:29
 */

namespace app\controllers;

use yii\web\Controller;

class MainController extends Controller
{
    public function behaviors()
    {
        return [
            'ghost-access'=> [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }
}