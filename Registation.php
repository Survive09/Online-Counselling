<?php
include("config.php");
if(isset($_POST['submit']))
{
            $firstName = $_POST["fname"];
            $lastName = $_POST["lname"];
            $email = $_POST["ymail"];
            $birthDay = $_POST["dat"];
            $birthDay =  date("Y-m-d", strtotime( $birthDay) );
            $contry = $_POST["IDno"];
            $tele = $_POST["contact"];
            $userName = $_POST["uname"];
            $pass = $_POST["cpass"];
			$status=0;
			$activationcode=md5($email.time());
		
$query=mysqli_query($con,"INSERT INTO `members` (`FirstName`, `LastName`, `Email`, `Birthday`, `Telephone`, `Identity`, `Username`, `Password`,`activationcode`,`status`) 
            VALUES ('$firstName', '$lastName','$email','$birthDay',$tele,'$IDno','$userName','$pass''$activationcode','$status')");
 if($query)
 {
$to=$email;
$msg= "Thanks for new Registration.";
$subject="Email verification";
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:Healing Minds | Online Counselling Services <estkambungu@gmail.com>'."\r\n";
$ms.="<html></body><div><div>Dear $firstName $lastName,</div></br></br>";
$ms.="<div style='padding-top:8px;'>Thank you for registering, you've taken a step closer to healing and changing your reality.<br>
Please click The following link For verifying and activation of your account</div>
<div style='padding-top:10px;'><a href='http://localhost/System/emailverify/email_verification.php?code=$activationcode'>Click Here.</a></div>
</body></html>";
mail($to,$subject,$ms,$headers);
echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
echo "<script>window.location = 'My account.php';</script>";;
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <link href="Registation_style.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <div id="head">
        <!--name-->
        <h1>Personal Online Counselling</h1>
    </div>
    <!--Navigation-->
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
      <a href="Registation.php">Register</a>
    </div>
  </div>
</ul>
    <!--Body-->

    <div id="back-img">
        <div id="form-back">
            <h2>Registeration</h2>
            <form name="insert" action=""  method="post">
                First Name:
                <input id="first-name" placeholder="First Name" type="text" name="fname"> Last Name:
                <input id="last-name" placeholder="Last Name" type="text" name="lname"><br> E-mail:
                <input id="email" placeholder="E-mail Address" type="email" name="ymail"><br>Date of Birth:
                <input id="date" type="date" name="dat"><br> ID Number:
                <input id="coun" placeholder="Identity Number" type="text" name="IDno"> Contact Number:
                <input id="cont" placeholder="Contact number" type="number" name="contact"><br> User Name:
                <input id="uname" placeholder="Username" type="text" name="uname"><br> Password:
                <input id="pass" placeholder="Password min charcter 7" type="password" name="pass"><br> C.Password:
                <input id="cpass" placeholder="Confirm Password" type="password" name="cpass"><br>
                <button id="signup" type="submit" name="btnSubmit">SIGN UP</button>
            </form>

        </div>


    </div>

    <!--footer-->

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