<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\base\Component;
use yii\bootstrap\Carousel;
$this->title = 'My Web';
?>
<head>
 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
.carso{
height: 200px;
width: 220px;

}
#carousel{
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
  animation: rotation 68s infinite linear;
}
#carousel:hover{
  animation-play-state: paused;
}
#carousel figure{
  display: block;
  position: absolute;
  width: 186px;
  height: 158px;
  left: 10px;
  top: 10px;
  background: black;
  overflow: hidden;
  border: solid 2px blue;
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
#carousel figure:nth-child(10) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(11) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(12) { transform: rotateY(320deg) translateZ(288px);}

img{
 /* -webkit-filter: grayscale(1);*/
  cursor: pointer;
  transition: all .40s ease;
}
/*.carso:hover{
  -webkit-filter: grayscale(1);
  transform: scale(1.2,1.2);
}
*/
@keyframes rotation{
  from{
    transform: rotateY(0deg);
  }
  to{
    transform: rotateY(360deg);
  }
}
</style>

<h1 class="head">My Life Story</h1>
  <div class="contain">
    <div id="carousel">
            <figure><img  class="carso"src="img/metro.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/shexing.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/sandbox.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/training.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/voluntary.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/mki.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/friendly.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/classmates.jpeg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/codingcamp.jpg" alt="in the metro" > </figure>
             <figure><img  class="carso"src="img/friendly.jpg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/classmates.jpeg" alt="in the metro" > </figure>
            <figure><img  class="carso"src="img/codingcamp.jpg" alt="in the metro" > </figure>
    </div>
  </div>
</br>
<hr>
<body class="w3-light-grey">
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
   
</header>
<div class="w3-row">
<div class="w3-col l8 s12">

  <div class="w3-card-4 w3-margin w3-white">
   
     

    <div class="w3-container">       <p>Mauris neque quam, fermentum ut nisl
vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.
Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
ultricies mi non congue ullam corper. Praesent tincidunt sed         tellus ut
rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
gravida diam non fringilla.Mauris neque quam, fermentum ut nisl
vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.
Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
ultricies mi non congue ullam corper. Praesent tincidunt sed         tellus ut
rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
gravida diam non fringilla.Mauris neque quam, fermentum ut nisl
vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.
Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed
ultricies mi non congue ullam corper. Praesent tincidunt sed         tellus ut
rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue
gravida diam non fringilla.</p>          
<img src="img/mki.jpg" alt="Nature"
style="width:100%">      
 <div class="w3-row">        
  <div class="w3-col m8
s12">           
<p><button class="w3-btn w3-padding-large w3-white w3-border
w3-hover-border-black"><b>READ MORE ?</b></button></p>     
    </div>
<div class="w3-col m4 w3-hide-small">          
 <p><span class="w3-padding-
large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
</div>       </div>     </div>   </div>   <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="img/shexing.jpg" alt="Norway" style="width:100%">
    <div class="w3-container w3-padding-8">
      <h3><b> MY BLOG  </b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><?= Html::a('Visit My Blog', ['site/blog'], ['class' => 'btn-lg btn-success']) ?></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
  <img src="img/classmates.jpeg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>My Name</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="img/metro.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <img src="img/metro.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li> 
      <li class="w3-padding-16">
        <img src="img/metro.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="img/metro.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>  
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="img/metro.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  
 
</div>

 
</div>

 
</div>

 

</body>
</html>

