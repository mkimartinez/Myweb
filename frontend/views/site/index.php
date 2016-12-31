<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\base\Component;
use yii\bootstrap\Carousel;
$this->title = 'My Web';
?>


<div class="   ">
   <div class="jumbotron">
 <h1><b>My Life My story!<b></h1> 
 <img src="img/profile1.jpg" alt="my profile photo" class="img-circle">
 <p class="text-center"><em>“No one is going to hand me success. I must go out and  get it myself. That’s why I’m here. To dominate. To conquer. Both the world, and myself.” </em></p>
 
   <div class "btn-group">
   <a href=""class="btn btn-lg btn-success"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
Like</a>
   <a href="" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>comment</a>
   <a href="comment/index.php"class="btn btn-lg btn-success"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Read More</a>
</div>
</div>
</div>  
<div class="container">
<h1>HOME</h1>
<div  class="panel panel-primary">
  <div class="panel-body">
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
</div>
</div>
<hr>
 

    <div style="background-color:pink  ">

        <div class="row">
            <div class="col-lg-4 ">

                <h2 style="text-align:center"><strong>My Blog</strong></h2>
<blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                    <?= Html::a('Visit My Blog', ['site/blog'], ['class' => 'btn-lg btn-success']) ?>
                  </blockquote>
                 
            </div>
            <div class="col-lg-4">
                <h2 style="text-align:center"><strong>Best Quotes</strong></h2>
                 <blockquote>
 
                <p class="w3-xlarge w3-serif">“The only thing that stands between you and your dream is the will to try and the belief that it is actually possible.” – Joel Brown.</p>

                  </blockquote>
                 
                <p><?= Html::a('Visit My Blog', ['site/blog'], ['class' => 'btn-lg btn-success']) ?></p>
            </div>
            <div class="col-lg-4">

                <h2 style="text-align:center"><strong>Calender</strong></h2>
<!--  <span class="glyphicon glyphicon-calendar " style="text-align:center"></span> -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
</blockquote>
                <!-- <p><a class="btn btn-info" href="site/index">More Events &raquo;</a></p> -->
                  <?= Html::a('more events', ['calendar'], ['class' => 'btn-lg btn-success  pull-right']) ?>
            </div>
        </div>

    </div>
</div>

