<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\AppAssetBootstrap;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use yii\bootstrap\Modal;



use app\assets\AppAssetGridView;
use app\assets\AppAssetIcons;


use app\assets\AppAssetDatePicker;

$AppAssetGridView = app\assets\AppAssetGridView::register($this);
$AppAssetIcons = app\assets\AppAssetIcons::register($this);
$AppAssetDatePicker = app\assets\AppAssetDatePicker::register($this);



$AppAssetBootstrap = app\assets\AppAssetBootstrap::register($this);
$AppAsset = app\assets\AppAsset::register($this);
$AppAssetEnd = app\assets\AppAssetEnd::register($this);

$baseUrl = $AppAsset->baseUrl;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script> //analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-77040127-13', 'auto');
        ga('send', 'pageview');

    </script>


</head>
<body>
<?php $this->beginBody() ?>
<script>Breakpoints();</script>
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="<?= $baseUrl ?>/assets/images/exercito-brasileiro-original.jpg"
                 title="Exército Brasileiro">

        </div>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>
    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-bar">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="badge badge-primary up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>NOTIFICATIONS</h5>
                            <span class="label label-round label-danger">New 5</span>
                        </li>
                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-order bg-red-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">A new order has been placed</h6>
                                                <time class="media-meta" datetime="2016-06-12T20:50:48+08:00">5 hours
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-user bg-green-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Completed the task</h6>
                                                <time class="media-meta" datetime="2016-06-11T18:29:20+08:00">2 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-settings bg-red-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Settings updated</h6>
                                                <time class="media-meta" datetime="2016-06-11T14:05:00+08:00">2 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-calendar bg-blue-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Event started</h6>
                                                <time class="media-meta" datetime="2016-06-10T13:50:18+08:00">3 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-chat bg-orange-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Message received</h6>
                                                <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0)" role="menuitem">
                                All notifications
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <!-- <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"
                        data-animation="scale-up"
                        aria-expanded="false" role="button">
                         <span class="flag-icon flag-icon-us"></span>
                     </a>
                     <ul class="dropdown-menu" role="menu">
                         <li role="presentation">
                             <a href="javascript:void(0)" role="menuitem">
                                 <span class="flag-icon flag-icon-gb"></span> English</a>
                         </li>
                         <li role="presentation">
                             <a href="javascript:void(0)" role="menuitem">
                                 <span class="flag-icon flag-icon-fr"></span> French</a>
                         </li>
                         <li role="presentation">
                             <a href="javascript:void(0)" role="menuitem">
                                 <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                         </li>
                         <li role="presentation">
                             <a href="javascript:void(0)" role="menuitem">
                                 <span class="flag-icon flag-icon-de"></span> German</a>
                         </li>
                         <li role="presentation">
                             <a href="javascript:void(0)" role="menuitem">
                                 <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                         </li>
                     </ul>
                 </li>-->
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="<?= $baseUrl ?>/global/portraits/5.jpg" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="<?= Url::base() . "/user-management/user/view?id=" . Yii::$app->user->id ?>"
                               role="menuitem"><i class="icon wb-user" aria-hidden="true"></i>
                                Perfil</a><!-- mudar para usar url do yii2-->
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings"
                                                                            aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="<?= Url::base() . "/user-management/auth/logout" ?>" role="menuitem"><i
                                    class="icon wb-power"
                                    aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">Cabo Armeiro X</li>
                    <li class="site-menu-item has-sub">
                        <a href="<?= Url::base() . "/user-management/user" ?>">
                            <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Gerenciar usuários</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="<?= Url::base() . "/reserva" ?>">
                            <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                            <span class="site-menu-title">Gerenciar reservas <reservas></reservas></span>

                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="<?= Url::base() . "/militar" ?>">
                            <i class="site-menu-icon wb-briefcase" aria-hidden="true"></i>
                            <span class="site-menu-title">Gerenciar militares</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub open">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Tipos de Itens</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/tipo-armamento" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Tipos de armamentos</span>
                                </a>
                            </li>

                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/tipo-municao" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Tipos de munições</span>
                                </a>
                            </li>

                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/tipo-acessorio" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Tipos de acessórios</span>
                                </a>
                            </li>
                        </ul>

                    <li class="site-menu-item has-sub open">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Itens da reserva</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/armamento" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Armamentos</span>
                                </a>
                            </li>

                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/municao" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Munições</span>
                                </a>
                            </li>

                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/acessorio" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Acessórios</span>
                                </a>
                            </li>
                        </ul>

                    <li class="site-menu-item has-sub open">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Cautela de itens</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/cautela-armamento" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Caulta de Armamentos</span>
                                </a>
                            </li>

                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/cautela-municao" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Cautela de munições</span>
                                </a>
                            </li>

                            <li class="site-menu-item has-sub">

                                <a href="<?= Url::base() . "/cautela-acessorio" ?>">

                                    <i class="site-menu-icon wb-calendar" aria-hidden="true"></i>
                                    <span class="site-menu-title">Cautela de acessórios</span>
                                </a>
                            </li>
                        </ul>


                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Page -->
<div class="page animsition">

    <div class="page-header">
        <h1 class="page-title"><?= $this->title ?></h1>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <div class="page-header-actions">
            <!-- Ações -->

        </div>
    </div>


    <div class="page-content">
        <div class="row">
            <div class="col-md-12">


                <?php
                if (Yii::$app->session->getFlash('success')) { ?>
                        <div class="alert  alert-icon alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="icon wb-check" aria-hidden="true"></i> <?= Yii::$app->session->getFlash('success'); ?>
                    </div>
                <?php } ?>

                <?php if (Yii::$app->session->getFlash('error')) { ?>

                    <div class="alert   alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="icon wb-close" aria-hidden="true"></i> <?= Yii::$app->session->getFlash('error'); ?>
                    </div>

                <?php } ?>

                <?php if (Yii::$app->session->getFlash('notice')) { ?>

                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="icon wb-info" aria-hidden="true"></i> <?= Yii::$app->session->getFlash('notice'); ?>
                    </div>

                <?php } ?>

                <?php if (Yii::$app->session->getFlash('warning')) { ?>

                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="icon wb-alert" aria-hidden="true"></i> <?= Yii::$app->session->getFlash('warning'); ?>
                    </div>

                <?php } ?>

            </div>
        </div>

        <?= $content ?>
    </div>
</div>
<!-- End Page -->
<!-- Footer -->

<footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="hhttp://www.eb.mil.br/">Exércio Brasileiro</a></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

