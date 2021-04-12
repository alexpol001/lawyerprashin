<?php

/* @var $this \yii\web\View */
/* @var \common\models\materials\Category $model */
/* @var $content string */

use common\models\setting\Setting;
use frontend\widgets\AboutWidget;
use frontend\widgets\ConsultantWidget;
use frontend\widgets\OnlineCallWidget;
use frontend\widgets\PriceWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\OnlineOrderWidget;

AppAsset::register($this);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Url::to(['/img/favicon.png'])]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="<?=Setting::take()->description?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Setting::take()->title) ?></title>
    <?php $this->head() ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138620765-1"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());

        gtag('config', 'UA-138620765-1');

    </script>

    <!-- Yandex.Metrika counter -->

    <script type="text/javascript" >

        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};

            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})

        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(53334610, "init", {

            clickmap:true,

            trackLinks:true,

            accurateTrackBounce:true,

            webvisor:true

        });

    </script>

    <noscript><div><img src="https://mc.yandex.ru/watch/53334610" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

    <!-- /Yandex.Metrika counter -->
</head>
<body>
<?php $this->beginBody() ?>

<h1 class="hidden">Html::encode(Setting::take()->title)</h1>

<?php if (Yii::$app->session->hasFlash('onlineOrderFormSubmitted')) { ?>

    <?php
    $this->registerJs(
        "$('#myModalSendOk').modal('show');",
        yii\web\View::POS_READY
    );
    ?>

    <!-- Modal -->
    <div class="modal fade" id="myModalSendOk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Сообщение доставлено!
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">X</span></button>
                    </h4>
                </div>
                <div class="modal-body">
                    <p>Благодарим вас за заявку. В ближайшее время мы свяжемся с вами.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<div id="pageloader">
    <div class="loader-img">
        <img alt="loader" src="img/loader.gif"/>
    </div>
</div>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <i class="fa fa-bars fa-fw"></i>
            </button>
            <a class="navbar-brand weight-900" href="#home"><img alt="" id="logo" src="img/logo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="scrollto" href="#home">Главная</a></li>
                <li><a class="scrollto" href="#about">Обо мне</a></li>
                <li><a class="scrollto" href="#advantage">Преимущества</a></li>
                <li><a class="scrollto" href="#services">Услуги</a></li>
                <li><a class="scrollto" href="#partners">Партнеры</a></li>
                <li><a class="scrollto" href="#contact">Контакты</a></li>
                <li>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-vk"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="content">
    <? if (!$this->context->fullscreen) : ?>
    <div class="container inner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <? else :?>
    <div class="fullscreen">
        <?= $content ?>
    </div>
    <? endif;?>
</div>
<div class="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 text-left">
                Все права защищены © <?=date("Y");?> Адвокат Игорь Паршин<br>
                Сайт разработан Digital-агентством «<a href="http://symbweb.ru" target="_blank"
                                                       title="Самые качественные сайты!">Симбиоз</a>»
            </div>
        </div>
    </div>
</div>

<div class="scrollup">
    <a class="scrolltotop" href="#"><i class="fa fa-angle-double-up"></i></a>
</div>
<?= AboutWidget::widget([]) ?>
<?= PriceWidget::widget([]) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
