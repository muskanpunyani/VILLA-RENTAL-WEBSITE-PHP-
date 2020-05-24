<!DOCTYPE html>
<?php include 'database.php'; ?>
<?php include 'database2.php'; ?>

<html>
<title>WELCOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html{
background-color: black;

}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display: none}
</style>
<body class="w3-content w3-border-left w3-border-right">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3>Rental</h3>
    <h3>from Rs.3500</h3>
    <h6>per night</h6>
    <hr>
    <form action="action_page.php" target="_blank" method="POST">
      <p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>          
      <p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>         
      <p><label><i class="fa fa-male"></i> Adults</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">              
      <p><label><i class="fa fa-child"></i> Kids</label></p>
      <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
      <p><button class="w3-button w3-block w3-white w3-left-align" type="submit" name="Search availability"><i class="fa fa-search w3-margin-right"></i> Search availability</button></p>
    </form>
  </div>
  <div class="w3-bar-block">
    <a href="#apartment" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-building"></i> Apartment</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('subscribe').style.display='block'"><i class="fa fa-rss"></i> Subscribe</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-envelope"></i> Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-black" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <B><h1 class="w3-text-white">The Grand Villa</h1></B>
    <div class="w3-display-container mySlides">
    <img src="http://localhost/Bung/Apart/villalivingroom.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-white">
        <p>Living Room</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="http://localhost/Bung/Apart/dinning.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-white">
        <p>Dining Room</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="http://localhost/Bung/Apart/villabed.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-white">
        <p>Bedroom</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="http://localhost/Bung/Apart/villabed2.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-white">
        <p>Bed Room II</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
        <img src="http://localhost/Bung/Apart/bathroom.jpg" style="width:100%;margin-bottom:-6px">
          <div class="w3-display-bottomleft w3-container w3-white">
            <p>BathRoom</p>
          </div>
        </div>
        <div class="w3-display-container mySlides">
            <img src="http://localhost/Bung/Apart/pool.jpg" style="width:100%;margin-bottom:-6px">
              <div class="w3-display-bottomleft w3-container w3-white">
                <p>Swimming Pool</p>
              </div>
            </div>
            <div class="w3-display-container mySlides">
                <img src="http://localhost/Bung/Apart/kitchen.jpg" style="width:100%;margin-bottom:-6px">
                  <div class="w3-display-bottomleft w3-container w3-white">
                    <p>Kitchen</p>
                  </div>
                </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col s2">
      <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/villalivingroom.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Living room">
    </div>
    <div class="w3-col s2">
      <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/dinning.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Dining room">
    </div>
    <div class="w3-col s2">
      <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/villabed.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
    </div>
    <div class="w3-col s2">
      <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/villabed2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Bedroom II">
    </div>
    <div class="w3-col s2">
        <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/bathroom.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(5)" title="Bathroom">
      </div>
      <div class="w3-col s2">
        <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/pool.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(6)" title="Swimming Pool">
      </div>
      <div class="w3-col s2">
        <img class="demo w3-opacity w3-hover-opacity-off" src="http://localhost/Bung/Apart/kitchen.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(7)" title="Kitchen">
      </div>
  </div>

  <div class="w3-container">
    <h4><strong>The space</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Max people: 4</p>
        <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 2</p>
        <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 2</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-clock-o"></i> Check In: After 12PM</p>
        <p><i class="fa fa-fw fa-clock-o"></i> Check Out: 12PM</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Amenities</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-bathtub"></i> Bathtub</p>
        <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
        <p><i class="fa fa-fw fa-tv"></i> TV</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
        <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
        <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Extra Info</strong></h4>
    <p>Our apartment is really clean and we like to keep it that way.Enjoy a beautiful stay away from home but within a home itself.</p>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    <hr>
    
    <h4><strong>Rules</strong></h4>
    <p>We hope that you enjoy to the fullest but maintaining cleanliness is must so we request you to take care of it considering it your home.<br>Happy Holidays!!!</p>
    <p>Subscribe to receive updates on available dates and special offers.</p>
    <p><button class="w3-button w3-white third" onclick="document.getElementById('subscribe').style.display='block'">Subscribe</button></p>
  </div>
  <hr>
  
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> Amravati, India<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: xxxxxxxx<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: apart@gmail.com<br>
    <p>Questions? Go ahead, ask them:</p>
    <form action=" " method="POST">
      <p><input class="w3-input w3-border" type="text"  name="Name" placeholder="Name" required ></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email"  name="Email" required></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message"  name="Message" required></p>
    <button type="submit" name="CLICK1" class="w3-button w3-white w3-third" value="butt2">Send a Message</button>
  
    </form>
  
    
  </div>
 
  
  <footer class="w3-container w3-padding-16" style="margin-top:32px">Enjoy!!!</footer>
 

<!-- End page content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
    
      <form action=" " method="POST">
     
      <p><input class="w3-input w3-border" type="text" placeholder="Email"  name="E-mail" required></p>
     
    <button type="submit" name="CLICK2" class="w3-button w3-black  w3-third" value="SUBSCRIBE">Subscribe</button>
  
    </form>
 
    </div>
  </div>
</div>
<?php

// create a variable
if($_REQUEST['CLICK2']=="SUBSCRIBE")
{

$EMAIL=$_POST['E-mail'];


//Execute the query

mysqli_query($connect," INSERT INTO subscribers_info(EMAIL)
                VALUE('$EMAIL')");

}
 if($_REQUEST['CLICK1']=="butt2")
{    
$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];

//Execute the query

mysqli_query($connect1," INSERT INTO queries(name,email,message)
             VALUES('$name','$email','$message')");
}    

                ?>

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>


</body>
</html>