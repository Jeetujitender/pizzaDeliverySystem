<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ABOUT-US|PIZZA HUB</title>
    <link rel="stylesheet" type="text/css" href="mydiv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   


  {{-- ****************  ferry ********* --}}
   <style>

body{
            padding: 0;
            margin: 0;
            background-image: url(/images/Wood.jpg);
            background-size: fixed;
        }
     html {
  font-family: 'Roboto Condensed', sans-serif;
}

#mainnav {
  position: absolute;
  font-family: 'Roboto Condensed', sans-serif;
  z-index: 1;
    
}
#mainnav li {
  margin: 55px 0;
  left: -550px;
  position: relative;
  display: none;
    
}
#mainnav a {
  color: white;   
  text-decoration: none;
  font-size: 1.4em;
}

 ul li{
            list-style: none;
            margin-top: -50px;
            
        }
.hamb {
  position: absolute;
  top: 20px;
  left: 20px;
  font-size: 2.5em;
  z-index: 1;
}
.hamb a {
  color: #fff;
  text-decoration: none;
}
html, body, .hero {
  height: 100%;
}


.hero {
  width: 100%;
  min-height: 600px;
  
    background-size: cover;
}

#bubble {
  width: 100%;
  height: 100%;
  opacity: 0.9;
  position: fixed;
  display: none;
  z-index: 1;
  background: rgba(0, 0, 0, .5);
}
     
        
        .gap{
             
            color: white;
            margin-top: 100px;
            width: 200px;     
             
        }

        .about-picture{
                    position: absolute;
                 }
                 .about-image{
                    position: absolute;
                    width: 150px;
                    transition: all 1s ease;
                    opacity: 0.9;
                 }
                
                 .img-1{
                    left: 0%;
                    top: 0%;
                 }
                  .img-2{
                    left: 20%;
                    top: 20%;
                    z-index: 10;
                 }
                  .img-3{
                    left: 40%;
                    top: 45%;
                    z-index: 20;
                 }
                  .img-4{
                    left: 40%;
                    top: 0%;
                    z
                 }
                  .img-5{
                    left: 0%;
                    top: 45%;
                 }
                 body{
                       background-image: url(/images/bg.jpg);
                 }
                 .about-image:hover{
                    outline: 10px solid #d3325f;
                    outline-offset: 0.8rem;
                    transform: scale(1.3) rotate(20deg);
                    z-index: 30;
                    opacity: 1;
                 }
                 .about-pictures:hover .about-image:not(:hover){
                    opacity: 0.5;
                 }
                 body{
            font-family: 'Permanent Marker', cursive;
           background-attachment: fixed;
        }
        .review-item{
            background: rgba(255,255,255,0.7);
            clip-path: polygon(5% 0,100% 0,90% 100%,0 100%);
        }
        .review-img{
            width: 150px;
        }
        .height-60{
            min-height: 60vh;
        }
      #contact .card:hover{
        background: rgba(0,0,0,0.5);
      }
      #contact .input-group-text{
        background: #d3325f;
        border-color: #d3325f;
        color: #242424;
      }
      #contact .card input{
        color: #606060;
      }
       #contact .card input::placeholder{
        color: #606060;
      }
      .contact-btn{
        color: white;
        border-color: #d3325f;
        background: white;
        transition: all 2s ease-in-out;
      }
      .contact-btn:hover{
        background: #c9c1ac;
        color: #d3325f;
        border-color: #c9c1ac;
      }
.mb-4{
       color: #ff0066;
    }

    .heading{
      color: #ff0066;
    }

    .map{
      background-image: url(/images/bg.jpg); 
    }
    h4{
      text-align: center;
      background-image: url(/images/bg.jpg);
      padding-bottom: 10px;
    }

    .form{
      background-image: url(/images/food.png); 
    }

    #ya{
text-align:center;  
}

form{
  width: 50%;
  margin: 100px auto;
  font-family: 'Roboto Condensed', sans-serif;
  padding-bottom: 10px;
}
form div{
  margin: 3px auto;
}
.textInput{
  margin-top: 2px;
  height: 28px;
  border: 1px solid #5E6E66;
  font-size: 16px;
  padding: 1px;
  width: 100%;
}
.mb-3{
  text-align: center;
  padding-top: 50px;
   font-size: 3em;
}
.btn-primary{
  padding-bottom: 10px;
}

 

  .row1{
    background: #303036;
    color: #d3d3d3;
    height: 400px; 
  }

   .row1 .column1{
  
    height:  350px;
    text-align: center;
  }

   .footer-bottom{
      top: 382%;

    background: #343a40;
    color: #ff0066;
    height: 50px;
    width: 100%;
    text-align: center;
    position: absolute;
    bottom:  0px;
    left: 0px;
    padding-top: 20px;
  }
  .column1 {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; 
}

h5{
  font-size: 3em;
  color: #ff0066;
  text-align: center;
  padding-top: 30px;
}
 
ul{
  padding-top: 100px;
  text-align: center;
}
 </style>
 
   </head>
<body>
    <nav role='navigation' id="mainnav">
    <br><br><br>
  <ul class="gap">
    <li><a href="/home" style="color: #99ff99;">HOME</a></li>
    <li><a href="/menu" style="color: #99ff99;">MENU</a></li>
    <li><a href="#?" style="color: #99ff99;">OFFERS</a></li>
    <li><a href="/form" style="color: #99ff99;">SIGN-UP</a></li>
    <li><a href="/form" style="color: #99ff99;">LOG-IN</a></li>
    <li><a href="#?" style="color: #99ff99;">FEEDBACK</a></li>
    <li><a href="/blog" style="color: #99ff99;">ABOUT-US</a></li>
 
  </ul>
</nav>  

<div class="hamb">
  <a href="#"><i class="fa fa-bars" style="font-size:44px;color:#e6ffe6"></i></a>
</div>

<canvas id="bubble"></canvas>

<section id="about" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 my-4">
                        <h1 class="text-uppercase display-3" style="color: #d3325f;text-align: center;"><b>About Us</b></h1>
                        <p class="text-muted" style="color: #ffffcc;font-size: 2em;text-align: center;">PIZZA makes anything possible. Anyone who can say money can-not buy the happiness has clearly
            never spent their money on PIZZA. Ideas are Like PIZZA DOUGH, made to be tossed around. </p>
                    <center ><a href="/blog" class="btn main-btn my-4 text-capitalize" style="color: white;background-color: #ff0066;">Learn More</a></center>
                        </div>

                        <div class="col-md-6 about-pictures my-4 d-none d-lg-block" style="padding-top: 30px;">
                            <img src="/images/image.jpg" alt="menu" class="img-1 img-thumbnail about-image"><br><br><br>
                            <img src="/images/photo.jpg" alt="menu" class="img-2 img-thumbnail about-image"><br><br><br>
                           <img src="/images/pizza.jpg" alt="menu" class="img-3 img-thumbnail about-image"><br><br><br>
                         <img src="/images/pizza-6.jpg" alt="menu" class="img-4 img-thumbnail about-image"><br><br><br>
                          <img src="/images/pizza-3.jpg" alt="menu" class="img-5 img-thumbnail about-image"><br><br><br> 
                          
                </div>
                
            </div>
              
          </section>

           <section id="reviews" class="py-5">
              <div  id="slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                                    <img src="/images/person_1.jpg" alt="" class="rounded-circle review-img">
                                </div>
                                <div class="review-text px-5">
                                    <h2 class="text-capitalize mb-3 primary-color" style="color: #d3325f">CHEF <a class="mr-2 primary-color" href="#"><i class="fa fa-linkedin-square" style="font-size:36px;color:#d3325f;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></h2>
                                    <p class="lead text-muted" style="color: #c9c1ac;">Lorem ipsum dolor sit amet, consectectur adipiscing elit.
                                    </p>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                                    <img src="/images/person_2.jpg" alt="" class="rounded-circle review-img">
                                </div>
                                <div class="review-text px-5">
                                    <h2 class="text-capitalize mb-3 primary-color" style="color: #d3325f">CHEF <a class="mr-2 primary-color" href="#"><i class="fa fa-linkedin-square" style="font-size:36px;color:#d3325f;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></h2>
                                    <p class="lead text-muted" style="color: #c9c1ac;">Lorem ipsum dolor sit amet, consectectur adipiscing elit.
                                    </p>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                 <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                                    <img src="/images/person_3.jpg" alt="" class="rounded-circle review-img">
                                </div>
                                <div class="review-text px-5">
                                    <h2 class="text-capitalize mb-3 primary-color" style="color: #d3325f">CHEF <a class="mr-2 primary-color" href="#"><i class="fa fa-linkedin-square" style="font-size:36px;color:#d3325f;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></h2>
                                    <p class="lead text-muted" style="color: #c9c1ac;">Lorem ipsum dolor sit amet, consectectur adipiscing elit.
                                    </p>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                 <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
                                    <img src="/images/person_4.jpg" alt="" class="rounded-circle review-img">
                                </div>
                                <div class="review-text px-5">
                                    <h2 class="text-capitalize mb-3 primary-color" style="color: #d3325f">CHEF <a class="mr-2 primary-color" href="#"><i class="fa fa-linkedin-square" style="font-size:36px;color:#d3325f;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></h2>
                                    <p class="lead text-muted" style="color: #c9c1ac;">Lorem ipsum dolor sit amet, consectectur adipiscing elit.
                                    </p>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                  
          </section>

          <section>
<div class="row1">
  <div class="column1">
    <h5>About-Us</h5>
    <p><a href="#" style="color:#ffffcc;">Pizza is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients baked at a high temperature, traditionally in a wood-fired oven. A small pizza is sometimes called a pizzetta.</a></p>
  </div>
  <div class="column1">
    <h5>Links</h5>
    <p><a class="mr-2 primary-color" href="#"><i class="fa fa-facebook-official" style="font-size:36px;color:#ffffcc;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></p>
    <p><a class="mr-2 primary-color" href="#"><i class="fa fa-linkedin-square" style="font-size:36px;color:#ffffcc;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></p>
    <p><a class="mr-2 primary-color" href="#"><i class="fa fa-whatsapp" style="font-size:36px;color:#ffffcc;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></p>
    <p><a class="mr-2 primary-color" href="#"><i class="fa fa-twitter" style="font-size:36px;color:#ffffcc;padding-left: 15px;padding-top: 7px;padding-bottom: 10px;"></i></a></p><br>
  </div>
  <div class="column1">
    <h5>Have any Question?</h5>
    
      
        <p style="padding-top: 10px;color: #ffffcc;">203 Fake St. Mountain View,<br> <i class="fa fa-map-marker" style='font-size:24px;'></i> San Francisco, California, USA</p>
                  <p style="color: #ffffcc;"><i class="fa fa-phone" style="font-size:24px"></i> +2 392 3929 210</p>
                  <p style="color: #ffffcc;"><i class="fa fa-envelope" style="font-size:24px"></i> info@yourdomain.com</p>
      
            
  </div>

<div class="footer-bottom">
    @Copyright 2019-2020 |
  All rights reserved | Web Feast | Pizza | 
  </div>
</div>
</section>




 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
    
<script>
  
var w = window.innerWidth,
    h = window.innerHeight,
    canvas = document.getElementById('bubble'),
    ctx = canvas.getContext('2d'),
    rate = 60,
    arc = 100,
    time,
    count,
    size = 7,
    speed = 20,
    lights = new Array,
    colors = ['#d59254','#ffffff','#1f2839','#cf7693'];

canvas.setAttribute('width',w);
canvas.setAttribute('height',h);

function init() {
  time = 0;
  count = 0;

  for(var i = 0; i < arc; i++) {
    lights[i] = {
      x: Math.ceil(Math.random() * w),
      y: Math.ceil(Math.random() * h),
      toX: Math.random() * 5 + 1,
      toY: Math.random() * 5 + 1,
      c: colors[Math.floor(Math.random()*colors.length)],
      size: Math.random() * size
    }
  }
}

function bubble() {
  ctx.clearRect(0,0,w,h);

  for(var i = 0; i < arc; i++) {
    var li = lights[i];
    
    ctx.beginPath();
    ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
    ctx.fillStyle = li.c;
    ctx.fill();
    
    li.x = li.x + li.toX * (time * 0.05);
    li.y = li.y + li.toY * (time * 0.05);
    
    if(li.x > w) { li.x = 0; }
    if(li.y > h) { li.y = 0; }
    if(li.x < 0) { li.x = w; }
    if(li.y < 0) { li.y = h; }
  }
  if(time < speed) {
    time++;
  }
  timerID = setTimeout(bubble,1000/rate);
}
init();
bubble(); 

var animation = 'easeOutCubic';
    delay     = 60;

$(document)
  .on('click', '.fa-bars', function(){
    var i = 0;
    $('nav').before($('#bubble'));
    $('#bubble').fadeIn();
    $('#mainnav').find('li').each(function(){
      var that = $(this);
      i++;
      (function(i, that){
          setTimeout(function(){
            that
              .animate(
                { 'left'   : '20px' }, 
                { duration : 350, 
                  easing   : animation })
              .fadeIn({queue: false});
          }, delay * i)
      }(i, that))
    }); 
    $('.fa-bars').fadeOut(100,function(){
      $(this)
        .removeClass('fa-bars')
        .addClass('fa-times')
        .fadeIn(); 
    });
  })
  .on('click', '#bubble, .fa-times', function(){ 
    $('#bubble').fadeOut();
    $('#mainnav').find('li')
      .animate(
        { 'left'   : '-550px' }, 
        { duration : 250 })
      .fadeOut({queue: false});
    
    $('.hamb').fadeOut(100, function(){
      $(this)
        .find($('i'))
        .removeClass('fa-times')
        .addClass('fa-bars')
        .end()
        .fadeIn();
    });
  }) 

  var slideIndex = 0;
 showSlides();

 function showSlides() {
  var i;
 var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
   }
  slideIndex++;
   if (slideIndex > slides.length) {slideIndex = 1}    
   for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex-1].style.display = "block";  
   dots[slideIndex-1].className += " active";
   setTimeout(showSlides, 2000); 
 }
</script>

</body>
</html>