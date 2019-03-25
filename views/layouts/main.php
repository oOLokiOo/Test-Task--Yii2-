<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <header>
        <div class="row display-flex-center">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 p-0">
                    <?php
                    NavBar::begin([
                        'brandLabel'    => '<img src="/images/logo.png" alt="'.$this->title.'" title="SKOKOV" />',
                        'brandUrl'      => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-default',
                        ],
                    ]);
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-nav-top navbar-right'],
                        'items' => [
                            [
                                'label'     => 'Home',
                                'url' => ['/site/index'],
                                'active'    => ((\Yii::$app->controller->module->requestedRoute == 'site/index' || \Yii::$app->controller->module->requestedRoute == '') ? true : false)
                            ],
                            ['label' => 'Portfolio'],
                            ['label' => 'Blog'],
                            ['label' => 'About Us'],
                            //['label' => 'Contuct'],
                            Yii::$app->user->isGuest ? (
                                ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                                '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'
                            )
                        ],
                    ]);
                    NavBar::end();
                    ?>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row">
            <div class="slogan-head display-flex-center">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 p-0">
                    <span class="page-title">Portfolio</span>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

        <div class="row">
            <div class="slogan">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h1>We create quality designs</h1>
                    <p class="lead">We specialize in Web Design / Development and Graphic Design</p>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 p-0">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>

                <?= Alert::widget() ?>

                <?php
                    NavBar::begin();
                    echo Nav::widget([
                        'options'   => ['class' => 'navbar-nav navbar-left navbar-nav-middle catalog-filter'],
                        'items'     => [
                            [
                                'label'     => 'All',
                                'active'    => (\Yii::$app->controller->id == 'site' ? true : false)
                            ],
                            ['label' => 'Website'],
                            ['label' => 'Logo'],
                            ['label' => 'Ui kit'],
                            ['label' => 'Photo'],
                            ['label' => 'App Design']
                        ],
                    ]);
                    NavBar::end();
                ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </header>

    <?= $content ?>

    <footer class="footer">
        <div class="row ptb">
            <div class="col-sm-1"></div>
            <div class="col-sm-3 pl-0">
                <div class="about">
                    <b>About Us</b>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                        sed diam nonummy nibh euismod tincidunt ut 
                        laoreet dolore magna aliquam erat volutpat. Ut wisi 
                        enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="#" class="btn">Learn more</a>

                    <b class="smt">Photo Stream</b>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/images/photo-steam-1.jpg" />
                        </div>
                        <div class="col-sm-4">
                            <img src="/images/photo-steam-2.jpg" />
                        </div>
                        <div class="col-sm-4">
                            <img src="/images/photo-steam-3.jpg" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/images/photo-steam-4.jpg" />
                        </div>
                        <div class="col-sm-4">
                            <img src="/images/photo-steam-5.jpg" />
                        </div>
                        <div class="col-sm-4">
                            <img src="/images/photo-steam-6.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="lasted">
                    <b>Latest tweets</b>

                    <ul class="tweets">
                        <li>
                            <p>
                                Check Out Dtbaker's <a class="ye" href="#">@Arduino</a> Sales Notification <a class="ye" href="#">#System</a>s<br />
                                http://t.co/ WBFKIWHJ<br />
                                <a class="ye" href="#">3 days ago</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                Community Superstar Winner – <a class="ye" href="#">#OrganicBeeMedia</a><br />
                                http://t.co/2Fs1nnMj<br />
                                <a class="ye" href="#">3 days ago</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                Clean <a class="ye" href="#">#Websites</a> Designs for Your <a class="ye" href="#">#Inspiration</a><br />
                                http://t.co/ SnRKu3HJ<br />
                                <a class="ye" href="#">5 days ago</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                Cute Online <a class="ye" href="#">#Shops</a> http://t.co/ 1PoQN3bJ<br />
                                <a class="ye" href="#">6 days ago</a>
                            </p>

                        </li>
                        <li>
                            <p>
                                Download 40 vector <a class="ye" href="#">#icons</a> package for <a class="ye" href="#">#FREE</a><br />http://t.co/2Fp5GLqn<br />
                                <a class="ye" href="#">6 days ago</a>
                            </p>
                        </li>
                    </ul>

                    <b class="smt">Social Connecting</b>
                    <ul class="list-inline">
                        <li><a href="#"><img src="/images/icon-fb.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-gp.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-twt.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-li.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-yt.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-bb.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-rss.png" /></a></li>
                        <li><a href="#"><img src="/images/icon-dr.png" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contact">
                    <b>Contact Info</b>

                    <ul>
                        <li>Address: 12569 Saint Patrick des Prés, 85000 Paris, France</li>
                        <li>
                            Phone: +38 045 845-45-78
                            <br />
                            +38 045 845-45-79
                        </li>
                        <li>E-mail: <a class="ye" href="mailto:freeforwebdesign@gmail.com">freeforwebdesign@gmail.com</a></li>
                    </ul>

                    <b class="smt">Follow Us</b>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>
                        <form action="" method="post">
                            <input class="pull-left" type="text" name="" value="" />
                            <button class="pull-left" type="submit"></button>
                        </form>
                    </p>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="row black-bg">
            <div class="copy">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                        <p class="navbar-left display-flex-center">
                            Copyright <?php echo date('Y'); ?> - FreeForWebDesign.com - All Rights Reserved
                        </p>

                        <?php
                        NavBar::begin();
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-nav-bottom navbar-right'],
                            'items' => [
                                [
                                    'label'     => 'Home',
                                    'url' => ['/site/index'],
                                    'active'    => ((\Yii::$app->controller->module->requestedRoute == 'site/index' || \Yii::$app->controller->module->requestedRoute == '') ? true : false)
                                ],
                                ['label' => 'Portfolio'],
                                ['label' => 'Blog'],
                                ['label' => 'About Us'],
                                //['label' => 'Contuct'],
                                Yii::$app->user->isGuest ? (
                                    ['label' => 'Login', 'url' => ['/site/login']]
                                ) : (
                                    '<li>'
                                    . Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                )
                            ],
                        ]);
                        NavBar::end();
                        ?>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
