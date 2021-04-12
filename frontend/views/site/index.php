<?
/* @var $this \yii\web\View */

/* @var $model \common\models\materials\Category */

/* @var $orderModel \frontend\models\OnlineOrderForm */

use common\models\setting\Setting;
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\widgets\ActiveForm;

?>
<section id="home">

    <div id="slides">
        <div class="slides-container">
            <div class="parallax" style="background-image:url(img/pictures/1block.jpg)">
                <div class="img-overlay-solid" style="background-color:rgba(0,0,0,0.3);">
                </div>
                <div class="caption container">
                    <h2 class="weight-700 color-white">Срочная юридическая помощь</h2>
                    <h3 class="weight-400 color-white">Пусть рухнет мир, но свершится правосудие!</h3>
                    <div class="owner-info">
                        <h4>Адвокат <span class="name">Игорь Николаевич Паршин</span></h4>
                        <div class="phones">
                            <p>Телефон: <span class="phone">+7 (903) 274-76-95</span></p>
                            <p><span class="phone">+7 (916) 532-78-77</span></p>
                        </div>
                    </div>
                    <br/>
                    <a class="btn btn-primary scrollto" href="#about">Подробнее</a>
                    <a class="btn btn-white btn-outline scrollto" href="#contact-form">Получить консультацию</a>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="fullwidth-section half-padding parallax" style="background-image:url(img/pictures/fon.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5 col-md-offset-1 about-me-desc revealator-slideleft revealator-once">
                    <h2 class="color-primary">
                        Обо мне</h2>
                    <ul>
                        <li><i class="fa fa-check"></i>Не знаете куда обратится за квалифицированной помощью?</li>
                        <li><i class="fa fa-check"></i>Вы столкнулись с неразрешимой правовой ситуацией?</li>
                        <li><i class="fa fa-check"></i>Вам требуется срочная консультация адвоката?</li>
                    </ul>
                    <div class="about-content">
                        <p>Вам нужен адвокат, который сумеет защитить Ваши права и права ваших близких, минимизировав
                            временные и финансовые затраты и потери.</p>
                        <p>Отработанная процедура ведения независимого адвокатского расследования, привлечение экспертов
                            и специалистов в
                            различных областях, которые смогут доказать Вашу
                            невиновность или отсутствие преступного умысла - вот те
                            причины, по которым я смогу защитить Вас.</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-7 col-md-offset-1 about-me revealator-slideright revealator-once">
                    <img alt="" src="img/team/foto.png" class="img-responsive img-center rounded">
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModalAbout">Подробнее обо
                        мне</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="advantage">
    <div class="fullwidth-section">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <h2 class=" kill-top-margin">Почему выбирают нас</h2>
                    <div class="advantages-list-1">
                        <div class="advantage-item revealator-slideright revealator-once">
                            <div class="advantage-value" data-end-count="25" data-speed="2500">
                                25
                            </div>
                            <div class="advantage-text">
                                Лет успешной работы
                                в юридической сфере
                            </div>
                        </div>
                        <div class="advantage-item revealator-slidedown revealator-once">
                            <div class="advantage-value">
                                <span class="" data-end-count="97" data-speed="2500">97</span>%
                            </div>
                            <div class="advantage-text">
                                Дел с положительным
                                результатом
                            </div>
                        </div>
                        <div class="advantage-item revealator-slideleft revealator-once">
                            <div class="advantage-value" data-end-count="100" data-speed="2500">
                                100
                            </div>
                            <div class="advantage-text">
                                Лет - общий стаж наших
                                специалистов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantages-list-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="advantage-item revealator-fade revealator-duration10 revealator-once">
                            <div class="advantage-icons">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="advantage-title">
                                Команда
                            </div>
                            <div class="advantage-text">
                                Минимальный стаж команды в
                                области оказания юридической
                                помощи 10 лет
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="advantage-item revealator-fade revealator-delay2 revealator-duration10 revealator-once">
                            <div class="advantage-icons">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="advantage-title">
                                Большой опыт
                            </div>
                            <div class="advantage-text">
                                Наша команда защищает интересы
                                клиентов на реальных заседаниях,
                                опыт работы более 25 лет
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="advantage-item revealator-fade revealator-delay4 revealator-duration10 revealator-once">
                            <div class="advantage-icons">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="advantage-title">
                                Отличное качество
                            </div>
                            <div class="advantage-text">
                                Мы порадуем вас качеством и
                                оперативностью решения любых
                                вопросов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Team Display -->
</section>

<section id="services">
    <div class="fullwidth-section" style="background-color: #F5F5F5">
        <div class="container">
            <div class="row" style="margin-bottom: 40px;">
                <h2 class="kill-top-margin">Наши услуги</h2>
                <h4 class="weight-400">Ниже представленны основные сферы права, на которых мы специализируемся
                    и помогаем нашим клиентам. </h4>
            </div>
            <!-- START OF ACCORDION AND TABS -->
            <div class="row">
                <div class="col-md-6 revealator-slideright revealator-once">
                    <div id="accordion" class="panel-group">
                        <!--element start-->
                        <? $i = 0 ?>
                        <? /** @var \common\models\materials\Material $material */
                        foreach ($model->materials as $material) :?>
                            <div class="panel panel-default">
                                <a class="accordion-button<?= !$i ? ' selected' : '' ?>" data-parent="#accordion"
                                   data-toggle="collapse"
                                   href="#<?= 'accordion-' . $i ?>">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><i
                                                    class="fa <?= $material->getAttributeById(53)->value ?>"></i><?= $material->title ?>
                                        </h5>
                                    </div>
                                </a>
                                <div id="<?= 'accordion-' . $i ?>"
                                     class="panel-collapse collapse<?= !$i ? ' in' : '' ?>">
                                    <div class="panel-body">
                                        <?= $material->text ?>
                                        <div class="button-wrap">
                                            <a class="btn btn-primary scrollto" href="#contact-form">Записаться на
                                                консультацию</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? $i++ ?>
                        <? endforeach; ?>
                        <!--element end-->
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs revealator-slideleft revealator-once">
                    <div class="image">
                        <img src="img/lawyer.png" alt="">
                    </div>
                </div>
            </div>
            <div class="cost button-wrap">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModalPrice">Стоимость услуг</a>
            </div>
        </div>
    </div>
    <div class="fullwidth-section working">
        <div class="parallax" style="background-image: url('img/pictures/fon2.jpg'); background-position: 50% 137.33px;"
             data-stellar-background-ratio="0.2"></div>
        <div class="img-overlay-solid" style="background-color:rgba(0,0,0,0.0);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="kill-top-margin">Как мы работаем?</h2>
                    <div class="working-list">
                        <div class="working-item revealator-zoomin revealator-once" style="background: rgba(31, 32, 36, 0.85)">
                            <div class="item-number">
                                0<span style="color: #9e9554;">1</span>
                            </div>
                            <div class="item-title">
                                Заполните заявку
                            </div>
                            <div class="item-text">
                                После заполнения заявки юрист
                                свяжется с вами и обсудит детали
                                вашей проблемы и назначит
                                встречу.
                            </div>
                        </div>
                        <div class="working-item revealator-zoomin revealator-delay1 revealator-once" style="background: rgba(81, 134, 151, 0.85)">
                            <div class="item-number">
                                0<span style="color: #c9c290;">2</span>
                            </div>
                            <div class="item-title">
                                Консультация юриста
                            </div>
                            <div class="item-text">
                                На встрече юрист обсудит с вами все вопросы, вы вместе
                                выработаете стратегию защиты и заключите договор.
                            </div>
                        </div>
                        <div class="working-item revealator-zoomin revealator-delay2 revealator-once" style="background: rgba(157, 149, 83, 0.85)">
                            <div class="item-number">
                                0<span style="color: #59676c;">3</span>
                            </div>
                            <div class="item-title">
                                Защита интересов
                            </div>
                            <div class="item-text">
                                Мы сможем отстоять ваши
                                интересы в суде, поможем
                                взыскать долги, доказать
                                невиновность и получить
                                компенсацию.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="partners">

    <div class="fullwidth-section">
        <div class="container">
            <h2>Наши партнеры</h2>
            <div class="sliderPartners revealator-slideup revealator-once">
                <? OwlCarouselWidget::begin([
                    'container' => 'div',
                    'containerOptions' => [
                        'id' => 'slider-home',
                    ],
                    'pluginOptions' => [
                        'autoplay' => true,
                        'autoplayTimeout' => 3000,
                        'autoplayHoverPause' => true,
                        'items' => 6,
                        'loop' => true,
                        'smartSpeed' => 1000,
                        'nav' => true,
                        'navText' => ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                        'responsive' => [
                            '1200' => [
                                'items' => 6,
                            ],
                            '992' => [
                                'items' => 5,
                            ],
                            '768' => [
                                'items' => 4,
                            ],
                            '480' => [
                                'items' => 3,
                            ],
                            '0' => [
                                'items' => 2,
                            ]
                        ]
                    ]
                ]);
                ?>
                <div class="slide">
                    <img src="img/partners/part1.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part2.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part3.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part4.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part5.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part6.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part7.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/partners/part8.png" alt="">
                </div>
                <? OwlCarouselWidget::end(); ?>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="fullwidth-section half-padding">
        <div class="container">
            <div class="row" style="margin-bottom: 20px">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="kill-top-margin">Как нас найти?</h2>
                    <h4 class="weight-400">Позвоните или напишите нам! Мы ждем Вас!</h4>
                </div>
            </div>
        </div>
        <div class="map-wrapper revealator-slideright revealator-once">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2240.190139041027!2d37.35013341618917!3d55.84201498057733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5470158eefdad%3A0xfaa93840770c0260!2z0JTRg9Cx0YDQsNCy0L3QsNGPINGD0LsuLCA0NCwg0JzQvtGB0LrQstCwLCAxMjUzNjg!5e0!3m2!1sru!2sru!4v1550682507408" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div id="map-canvas">
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top: 40px;">
                <div class="col-md-3">
                    <div class="icon-feature-horizontal-sm">
                        <div class="icon">
                            <i class="im-compass color-primary ae"></i>
                        </div>
                        <div class="content revealator-slideleft revealator-once">
                            <h4 class="uppercase weight-700">Мы находимся</h4>
                            <p>
                                <strong class="color-primary">Москва</strong><br/>
                                ул. Дубравная, 44<br/>
                                офис напротив здания<br/>
                            </p>
                        </div>
                    </div>
                    <div class="icon-feature-horizontal-sm">
                        <div class="icon">
                            <i class="im-mail2 color-primary ae"></i>
                        </div>
                        <div class="content revealator-slideleft revealator-once">
                            <h4 class="uppercase weight-700">Звоните нам</h4>
                            <p class="mail">
                                <a href="mailto:<?=Setting::take()->mail->username?>"><?=Setting::take()->mail->username?></a><br/>
                            </p>
                            <div class="phones">
                                Тел: +7 (903) 274-76-95<br/>
                                +7 (916) 532-78-77
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-feature-horizontal-sm">
                        <div class="icon">
                            <i class="im-clock color-primary ae"></i>
                        </div>
                        <div id="contact-form" class="content revealator-slideleft revealator-once">
                            <h4 class="uppercase weight-700">Время работы</h4>
                            <p>
                                <strong>Пн-пт:</strong> 8.00-22.00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 revealator-zoomin revealator-once">
                    <h4 class="uppercase weight-700">Отправить сообщение</h4>
                    <?php $form = ActiveForm::begin(['id' => 'online-order-form']); ?>
                    <form action="#" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($orderModel, 'name')->textInput() ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($orderModel, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                                    'mask' => '+7 (999) 999 99 99', 'clientOptions' => ['showMaskOnHover' => false]
                                ])->textInput() ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $form->field($orderModel, 'body')->textarea(['rows' => 6]) ?>
                                <div class="text-center">
                                    <br/>
                                    <button class="btn btn-primary" type="submit">Отправить заявку</button>
                                    <br>
                                    <div id="error">
                                        Заполните поля
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
