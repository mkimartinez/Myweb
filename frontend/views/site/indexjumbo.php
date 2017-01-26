<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\base\Component;
use yii\bootstrap\Carousel;
$this->title = 'My Web';
?>
<style>

@import url(http://fonts.googleapis.com/css?family=Anaheim);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  box-sizing: border-box;
}
*:before,
*:after{
  box-sizing: border-box;
}
html,
body{
  min-height: 100%;
}
body{
  background-image: radial-gradient(mintcream 0%, lightgray 100%);
}
.head{
  display: table;
  margin: 5% auto 0;
  text-transform: uppercase;
  font-family: 'Anaheim', sans-serif;
  font-size: 4em;
  font-weight: 400;
  text-shadow: 0 1px white, 0 2px black;
}
.contain{
  margin: 4% auto;
  width: 210px;
  height: 140px;
  position: relative;
  perspective: 1000px;
}
#carousel{
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  animation: rotation 20s infinite linear;
}
#carousel:hover{
  animation-play-state: paused;
}
#carousel figure{
  display: block;
  position: absolute;
  width: 186px;
  height: 116px;
  left: 10px;
  top: 10px;
  background: black;
  overflow: hidden;
  border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

img{
  -webkit-filter: grayscale(1);
  cursor: pointer;
  transition: all .5s ease;
}
img:hover{
  -webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
}

@keyframes rotation{
  from{
    transform: rotateY(0deg);
  }
  to{
    transform: rotateY(360deg);
  }
}
</style>

<h1 class="head">3d images gallery</h1>
  <div class="contain">
    <div id="carousel">
      <figure><img src="http://lorempixel.com/186/116/nature/1" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/2" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/3" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/4" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/5" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/6" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/7" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/nature/8" alt=""></figure>
      <figure><img src="http://lorempixel.com/186/116/people/9" alt=""></figure>
    </div>
  </div>


<div class="   ">
  <!--  <div class="jumbotron">
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
</div>   -->
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

