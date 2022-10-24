<?php
session_start();

if(isset($_SESSION['admin'])){
		header('location: admin/');
    exit;
    }
	if(isset($_SESSION['member'])){
		header('location: Member/');
        exit;
	}
	if(isset($_SESSION['councillor'])){
		header('location: Counsellor/');
        exit;
	}
?>
<html>
<head>
  <link rel="stylesheet" href="CSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Home | Online Counseling</title>


<ul>
  <li><a href="index.php">Home</a></li>
  <div class="dropdown">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Anger.html">Anger</a>
      <a href="Anxiety.html">Anxiety</a>
	  <a href="Depression.html">Depression</a>
	    <a href="Insomnia.html">Insomnia</a>
	  <a href="Stress.html">Stress</a>
    </div>
  </div>
  <li><a href="counsellors.php">About The Counsellor</a></li>
  <li><a href="My account.php">Book A Session</a></li>
  <li><a href="faq.html">FAQ</a></li>
   <div class="dropdown">
    <button class="dropbtn">Log In/Register
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="My account.php">Log In</a>
      <a href="Register.php">Register</a>
    </div>
  </div>
</ul>
</head>


<div class="hero-image">
  <div class="hero-text">
   <h1>Your Healing Journey,<br> Begins Now.</h1>
   <button class="button1">
   <a href="Member/getService.php">Schedule A Session</button>
   </a>
  </div>
  </div>

<body>

<div class="leaf-subhead">
<h1>HOW IT WORKS</h1>
</div>

<div id="leaf-part" class="leaf-sec">
<div class="leaf-img"><!--img class="leafs-part " width="150" height="102" /--><span
 class="elementor-icon elementor-animation-" 
 style="color: #B5B3B3; border-color: #FFFFFF;    
 font-size: 65px;">
 <i class="fa fa-user" aria-hidden="true"></i>
 </span>
 </div>
<div class="leaf-headline-container ">
<h3 class="leaf-sub-headline">Register or Log into your account</h3>
</div>
</div>


<div class="main-leaf-sec">
<div id="leaf-part" class="leaf-sec">
<div class="leaf-img"><!--img class="leafs-part " width="150" height="102" /--><span 
class="elementor-icon elementor-animation-" 
style="color: #B5B3B3; border-color: #FFFFFF;    
font-size: 65px;">
<i class="fa fa-wechat" aria-hidden="true"></i></span></div>

<div class="leaf-headline-container ">
<h3 class="leaf-sub-headline">Book for a counselling session and <br> provide your Zoom ID</a></h3>
</div>
</div>



<div id="leaf-part" class="leaf-sec">
<div class="leaf-img"><!--img class="leafs-part "width="150" height="102" /--><span 
class="elementor-icon elementor-animation-" 
style="color:#B5B3B3; border-color: #FFFFFF;    
font-size: 65px;">
<i class="fa fa-video-camera" aria-hidden="true"></i></span>
</div>

<div class="leaf-headline-container ">
<h3 class="leaf-sub-headline">Talk with messages, voice,or video call<br>via Zoom</h3>
</div>
</div>
</div>

<div class="client-image">
   <div class="homepage-text2">
   <h1> "The wound is not my fault.<br>
    But the healing is my responsibility."
                      <br>-Marianne Williamson</h1>
</div>
</div>


<!----footer--->
<div class="footer">
<ul id="menu-footer" class="therapy-nav-menu">
<div class="disclaimer"
 <p> <b>DISCLAIMER<br>
 If you are in a life threatening situation, DO NOT USE THIS SITE.
 Call the 24-hour National Suicide Prevention Lifeline at 061 232221.
 If your issue is an emergency, call (police/ambulance) or go to your nearest emergency room.</b></p>
</div>

  <li><a href="index.php">Home</a></li>
  <li><a href="faq.html">Frequently Asked Questions</a></li>
 </ul>

 <p>&#x000A9;&nbsp;2022 &middot; <a href="index.php">Free Online Therapy</a>
  &middot; 
 </div>


</body>
</html>
