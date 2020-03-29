<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli|Roboto&display=swap" rel="stylesheet">
        <style>
body { 
  margin: 0;
   font-family: 'Indie Flower', cursive;
   background-color:black;
    /* background-image:url('/images/black.jpg');
    background-repeat: no-repeat;
	background-size:cover;
	background-position:center; */
    
}
/* p{
    color:white;
} */
h2{
    color:white;
    font-family: 'Lora', serif;
}
h3{
    color:white;
}


#header {
    background-image:url('/images/blogwall.png');
	background-repeat: no-repeat;
	background-size:cover;
	background-position:center;
  padding: 50px 10px;
  height:300px;
  color:white;
  text-align: center;
  font-size: 50px; 
  font-weight: bold;
  position: fixed;
  top: 0;
  width: 100%;
  transition: 0.2s;
  font-family: 'Muli', sans-serif;
  
}
p,h3{
  font-family: 'Crimson Text', serif;
}

.center{
text-align:center;
}
footer{
   font-family: 'Baloo Da 2', cursive;
    color:white;
}
.bgc{
  background-color:grey;
  width:500px;
  opacity:0.7;
  margin:20px auto;
  
}




</style>
        </head>
        <body>
        <div class="col-md-12" id="header"><div class="bgc">I think of Dieting<br> Then I eat PIZZA <i class="fa fa-cutlery" aria-hidden="true"></div></i></div>

       


<div style="margin-top:300px;padding:15px 15px 2500px;font-size:30px">
<h2 class="center">Read our BLOG!!</h2>
  <p class="center">Learn why PIZZA HUB is so uniQue+deliciouS</p>
  <br>
  <div class="row">
    <div class="col-md-4"><img src="/images/pizza1.jpg" height="300px" width="400px">
    <h3>The Delicious Pizza!</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, nesciunt?</p>
    </div>
    <div class="col-md-4"><img src="/images/piz.jpg" height="300px" width="400px">
    <h3>The Delicious Pizza!</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, nesciunt?</p>
    </div>
    <div class="col-md-4"><img src="/images/drink.jpg" height="300px" width="400px">
    <h3>The Delicious Pizza!</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, nesciunt?</p>
    </div>
  </div>
<br>
<br>
  <div class="row">
    <div class="col-md-4"><img src="/images/blog1.jpg" height="300px" width="400px">
    <h3>The Delicious Pizza!</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, nesciunt?</p>
    </div>
    <div class="col-md-4"><img src="/images/blog2.jpg" height="300px" width="400px">
    <h3>The Delicious Pizza!</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, nesciunt?</p>
    </div>
    <div class="col-md-4"><img src="/images/blog3.jpg" height="300px" width="400px">
    <h3>The Delicious Pizza!</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, nesciunt?</p>
    </div>
  </div>


</div>
<footer>
<div class="row">
<div class="col-md-3">
<h4>ABOUT US</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aspernatur corporis perferendis
 error consectetur. Aut dolore voluptates provident. Natus, totam?</p>
</div>



<div class="col-md-3">
<h4>RECENT BLOG</h4>
<p>Lorem ipsum dolor sit amet consectetur 
adipisicing elit. Veritatis magnam et sit sed.</p>
</div>


<div class="col-md-3">
<h4>SERVICES</h4>
<p>Cooked</p><br>
<p>Deliver</p><br>
<p>Quality Foods</p><br>
<p>Mixed</p><br>
</div>


<div class="col-md-3">
<h4>HAVE A QUESTION?</h4>
<h3><i class="fa fa-facebook-square" aria-hidden="true"></i></h3>
<h3><i class="fa fa-instagram" aria-hidden="true"></i></h3>
<h3><i class="fa fa-twitter-square" aria-hidden="true"></i></h3>
<p>Lorem ipsum dolor sit amet consectetur 
adipisicing elit. Veritatis magnam et sit sed.</p>
</div>
</div>
</footer>



        <script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.fontSize = "30px";
    document.getElementById("header").style.height = "150px";
  } 
  else {
    document.getElementById("header").style.fontSize = "50px";
    document.getElementById("header").style.height = "300px";
  }
}
</script>


        </body>
        </html>