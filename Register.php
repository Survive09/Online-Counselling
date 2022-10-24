<?php
include('Config/codes.php');
?>

<?php 

if(isset($_POST['submit'])){

    //echo "Button Clicked";

    //Obtain values from the form

    
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];
    $Birthday = $_POST['Birthday'];
    $ID_Number = $_POST['ID_Number'];
    $Telephone = $_POST['Telephone'];
    $Country = $_POST['Country'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
	
    //Saving the data into the database (SQL query)
      $sql = "INSERT INTO members SET

      Firstname = '$Firstname',
      Lastname = '$Lastname',
      Email = '$Email',
      Birthday = '$Birthday',
      ID_Number = '$ID_Number',
      Telephone = '$Telephone',
      Country = '$Country',
      Username = '$Username',
      Password = '$Password'
      ";


      $res = mysqli_query($conn, $sql) or die(mysqli_error());
      if($sql)
     {

        //Confirm Insertion of data in the database & data display appropriate message

      if($res==TRUE){

        echo "<script>alert('Registration Completed Successfully.')</script>";

      }
    }

      else{

       

        echo "<script>alert('Failed To Register. Please Try Again!.')</script>";

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
 <form action=""  method="POST">

FIRST NAME: <input id="first-name" type="text" name="Firstname" placeholder="Enter your First Name" required>

LAST NAME: <input id="last-name" type="text" name="Lastname" placeholder="Enter your Last Name" required><br>EMAIL:

<input id="email" type="email" name="Email" placeholder="Enter your Email" required> <br> DATE OF BIRTH:

<input id="date" type="date" name="Birthday" placeholder="Enter your Name" required><br> ID NUMBER:

<input id="coun" type="text" name="ID_Number" placeholder="Enter your ID Number" required><br>TELEPHONE:

<input id="cont" type="text" name="Telephone" placeholder="Enter your phone number" required><br>COUNTRY:

<input id="coun" type="text" name="Country" placeholder="Enter your Country" required><br>USERNAME:

<input id="uname" type="text" name="Username" placeholder="Enter your Username" required>

PASSWORD: <input id="pass" type="password" name="Password" placeholder="Enter your Password" required>
<br><br>
<pre>                                                                    <button id="signup" type="submit" name="submit">SIGN-UP</button></pre>

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