<?php
$con=mysqli_connect("localhost","root","","login");
$error="";


?>
<title>welcome staff</title>
<div class="topnav">
<a href="http://localhost/bekam/view.php" class="topnav">ADD CUSTOMER</a> 
<a href="http://localhost/bekam/search2.php" class="topnav" >SEARCHING</a>  
<a href="http://localhost/bekam/login.php" class="topnav" >LOGOUT</a>
</div>
<center>
<style>


a[class=new1]
{


color:#3B0B17;
font-size:50px;
cursor:pointer;
float:right;
position: absolute;
top: 130px;
left: 100px;
background-color:rgba(0, 0, 0, 0.5);

}	
a[class=neww]
{
color:#3B0B17;
font-size:50px;
cursor:pointer;
float:left ;
position: absolute;
top: 130px;
right: 100px;
background-color:rgba(0, 0, 0, 0.5);

}
a[class=new2]
{
width:30;
color:#fff;
height:50%;
font-size:60px;

}	

a[class=new]{
width:100%;
background-color:#123;
color:#fff;
border:2px solid#06F;
padding:5px;
font-size:18px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;

}
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: 30px;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}	
</style>
</style>
<body full background = "http://chocoangel.in/images/img/NYCastings-BG-Light.jpg">
</body>



<tr>
<br><center><a class ="new2">Welcome Staff</center></br>

</tr>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="http://astrokentico.s3.amazonaws.com/rojakdaily/media/elrafaei/a1m.jpg?ext=.jpg" style="width:100%">
    <div class="text">Yayasan Kebajikan Artis Tanah Air</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="http://www.kosmo.com.my/polopoly_fs/1.697952!/image/image.jpg_gen/derivatives/box_650/image.jpg" style="width:100%">
    <div class="text">Yayasan Kebajikan Artis Tanah Air</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="https://scontent.fkul13-1.fna.fbcdn.net/v/t1.0-9/37191160_904516636390159_3201174468718231552_o.jpg?_nc_cat=0&oh=d78ccf58e21623b1d25b555704cd6a79&oe=5BDFAD22" style="width:100%">
    <div class="text">Yayasan Kebajikan Artis Tanah Air</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<tr>
<br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<p </p>
</br>
</tr>

<tr>