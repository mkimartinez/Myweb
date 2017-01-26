<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Web',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],

    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    } else {
      $menuItems[] =['label' => 'About', 'url' => ['/site/about'],
      'items'=>[
              ['label' => 'Family', 'url' => ['/site/about']],
              ['label' => 'Work', 'url' => ['/site/about']],
              ['label' => 'Voluntary', 'url' => ['/site/about']]]];
      $menuItems[] =['label' => 'Gallery', 'url' => ['/site/gallery']];
      $menuItems[] =['label' => 'Education', 'url' => ['/site/education'],
      'items'=>[
              ['label' => 'University', 'url' => ['/site/education']],
              ['label' => 'High School', 'url' => ['/site/about']],
              ['label' => 'Primary', 'url' => ['/site/about']],
              ['label' => 'Other Trainings', 'url' => ['/site/gallery']]]];
      $menuItems[] =['label' => 'Awards', 'url' => ['/site/awards']];
      $menuItems[] =['label' => 'Blog', 'url' => ['/blog/index']];
      //$menuItems[] =['label' =>Html::img('img/mki.jpg',['alt' => 'Me'],['style' => ['width' => '100px', 'height' => '100px']]) , 'url' => ['/blog/index']];
      $menuItems[] =['label' =>'<img src="img/mki.jpg" alt="me" width="30", height="30" class="img-circle" >',

                    'items'=>[
              ['label' =>'<img src="img/mki.jpg" alt="me" width="50", height="50" class="img-circle" >'],

              ['label' => 'Other Trainings','class'=>['pull-right'], 'url' => ['/site/gallery']]]

                    ];
      $menuItems[] = '<li>'

            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout ',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels'=>false,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
      <footer id="subfooter" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
       <p><b><?= Html::a('Contact Me', ['site/contact'], ['class' => ' ']) ?></b></p>
       
   

      <p><b> <?= Html::a('My blog', ['site/blog'], ['class' => ' ']) ?></b></p>
            </div>
            <div class="col-md-4">
                <p style="font-size:18px;">CONTACT</p>
                <p><span class="fa fa-globe"></span>&nbsp;&nbsp;&nbsp;54, Jungong Rd, PA 45086, shnghai</p>
                <p><span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp;+1 8818250664</p>
                <p><span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp;<a href="mailto:mail@example.com">martinamakobe@gmail.com</a></p>
            </div>
            <div class="">
  <?= \imanilchaudhari\socialshare\ShareButton::widget([
        'style'=>'horizontal',
        'networks' => ['facebook','googleplus','linkedin','twitter'],
        'data_via'=>'imanilchaudhari', //twitter username (for twitter only, if exists else leave empty)
        'data_via'=>'martinamakobe@gmail.com', //tw
]); ?>

</div>
        </div>
    </div>
</footer>
        <p class=" ">&copy; MkiWebs  2015 - <?= date('Y') ?></p>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
