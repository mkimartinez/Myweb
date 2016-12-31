<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\base\Component;
use yii\bootstrap\Carousel;
$this->title = 'My Web';
?>




<section>
  <img class="mySlides" src="img/mki.jpg"
  style="width:100%">
  <img class="mySlides" src="img/mki.jpg"
  style="width:100%">
  <img class="mySlides" src="img/mki.jpg"
  style="width:100%">
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>



























<div class="site-index">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img  class="customImage" src="img/metro.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
     <img  class="customImage" src="img/metro.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
     <img  class="customImage" src="img/metro.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
<script>
  $('.carousel').carousel({
    interval: 3000
  })
</script>
<!-- /*end carousel*/ -->
<h1>HOME</h1>
<div class="container">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur
  </p>
</div>
<hr>
 

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>My Blog</h2>
<blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                    <?= Html::a('Visit My Blog', ['site/blog'], ['class' => 'btn-lg btn-info']) ?>
                  </blockquote>
                 
            </div>
            <div class="col-lg-4">
                <h2>Best Quotes</h2>
<blockquote>
                <p>“The only thing that stands between you and your dream is the will to try and the belief that it is actually possible.” – Joel Brown.</p>

                  </blockquote>
                <p><?= Html::a('Visit My Blog', ['site/blog'], ['class' => 'btn-lg btn-info']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Calender</h2>
<blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
</blockquote>
                <!-- <p><a class="btn btn-info" href="site/index">More Events &raquo;</a></p> -->
                  <?= Html::a('more events', ['calendar'], ['class' => 'btn-info']) ?>
            </div>
        </div>

    </div>
</div>
<hr>
<div class="">
  <?= \imanilchaudhari\socialshare\ShareButton::widget([
        'style'=>'horizontal',
        'networks' => ['facebook','googleplus','linkedin','twitter'],
        'data_via'=>'imanilchaudhari', //twitter username (for twitter only, if exists else leave empty)
        'data_via'=>'martinamakobe@gmail.com', //tw
]); ?>

</div>
