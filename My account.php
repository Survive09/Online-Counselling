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
<!DOCTYPE html>
<html>

<?php
  /*  session_start();

    if (isset($_SESSION['AccType'])) {
        $type = $_SESSION['AccType'];
        if ($type == "member") {
            header("Location: http://localhost/all/Member/getService.php");
        }
        else {
            header("Location: http://localhost/all/admin/Admin.php");
        }
    }
*/?>

<head>

     <script>
        function validateForm() {
            var x = document.forms["myForm"]["user"].value;
            if (x == "") {
                alert("Email must be filled out");
                return false;
            }
            var a = document.forms["myForm"]["password"].value;
            if (a == "") {
                alert("Password must be filled out");
                return false;
            }
			 var x = document.forms["myForm"]["identity"].value;
            if (x == "") {
                alert("Email must be filled out");
                return false;
            }
        }
    </script>

    <title>Login</title>
    <link href="My account_style.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <div id="header">
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
      <a href="Register.php">Register</a>
    </div>
  </div>
</ul>


    <!--Body-->

    <!--<div style="width:200px; position: absolute; height: 500px; display: block; background-color: lightgray;">
        <a href="#">Hello World!</a>
    </div> -->
    <!--login form-->
    <div id="back-img">
        <div id="login-form">
            <h2>LOG IN</h2>
            <form action="login.php" name="myForm" onsubmit="return validateForm()" method="post">
                <input class="form-input" placeholder="Email" type="email" name="user"><br>
				<input class="form-input" placeholder="Identity Number" type="text" name="identity"><br>
                <input class="form-input" placeholder="Password" type="password" name="password"><br>

                <button id="login-button" type="submit" name="btnSubmitMember">Patient</button>
                <button id="login-button" type="submit" name="btnSubmitAdmin">Admin</button>
                <button id="login-button" type="submit" name="btnSubmitCounsellor">Counsellor</button>
            </form>
<!-- php part *************************************************************************************** -->
        <?php
          /*  require 'config.php';
            

            if(isset($_POST['btnSubmit']))
            {
                $email = $_POST['user'];
                $password = $_POST['password'] ;

                $sql = "SELECT * FROM members WHERE email = '$email' AND password = '$password' AND Identity Number ='$IDno'";
                $sql2 = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' AND Identity Number ='$IDno'";
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                if ($result-> num_rows == 1)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        $_SESSION['AccType'] = "member";
                        $_SESSION['memberId'] = $row['id'];
                        $_SESSION['userName'] = $row['user_name'];
                        header("Location: http://localhost/all/Member/getService.php");
                    }
                }
                else if ($result2-> num_rows == 1)
                {
                    while($row = $result2-> fetch_assoc())
                    {
                        $_SESSION['AccType'] = "admin";
                        $_SESSION['memberId'] = $row['id'];
                        $_SESSION['userName'] = $row['user_name'];
                        header("Location: http://localhost/all/admin/Admin.php");
                    }
                }
                else{
                    ?> <p style="color:red;">Invaild email or password </p><br> <?php
                }
            
            }  
            $conn-> close(); 
        */?>
<!-- end of php part ******************************************************************************************** -->

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