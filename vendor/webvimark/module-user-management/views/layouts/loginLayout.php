<?php
use app\assets\AppAsset;
use webvimark\modules\UserManagement\UserManagementModule;
//use yii\bootstrap\BootstrapAsset;
use yii\helpers\Html;
use app\assets\AppAssetBootstrap;

/* @var $this \yii\web\View */
/* @var $content string */

$AppAssetBootstrap = app\assets\AppAssetBootstrap::register($this);
$assets = app\assets\AppAsset::register($this);
$AppAssetEnd = app\assets\AppAssetEnd::register($this);

$baseUrl = $assets->baseUrl;

$this->title = UserManagementModule::t('front', 'Authorization');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body class="page-login-v3 layout-full">

<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>