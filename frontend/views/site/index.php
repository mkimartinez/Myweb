<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Web';
?>
<div class="site-index">

  <div class="   ">
   <div class="jumbotron">
   

 <h1><b>My Life My story!<b></h1> 
 <img src="img/profile1.jpg" alt="my profile photo" class="img-circle">
 <p class="text-center"><b>“No one is going to hand me success. I must go out and  get it myself. That’s why I’m here. To dominate. To conquer. Both the world, and myself.” </b></p>
<!--   <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
   <div class "btn-group">
   <a href=""class="btn btn-lg btn-info"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
Like</a>
   <a href=""class="btn btn-lg btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>comment</a>
   <a href="comment/index.php"class="btn btn-lg btn-info"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Read More</a>
</div>
</div>
</div> <!-- end container -->
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
                  <?= Html::a('more events', ['site/calender'], ['class' => 'btn-info']) ?>
            </div>
        </div>

    </div>
</div>
<hr>
<div class="well">
  <p>
    Never               under              estimate                 your                    ability
  </p>

</div>
