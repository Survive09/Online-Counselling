<?php 
	session_start();
	if(!isset($_SESSION['member'])){
		header("location: ../My account.php");
	}
?>
<!DOCTYPE html>
<html>


<head>
    <title>Online Personal Counselling</title>
    <link href="Accounts_style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

     <style>
	 
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		}
		li {
		  display: inline;
		}
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #D0D3D4;
		}

		li {
		  float:left;
		}

		li a {
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		/* Change the link color to blue on hover */
		li a:hover {
		  background-color:#EBFBFB;
		}

		.dropdown {
		  float: left;
		  overflow: hidden;
		}

		/* Style the dropdown button*/
		.dropdown .dropbtn {
		  font-size: 17px;
		  border: none;
		  outline: none;
		  color: black;
		  padding: 14px 16px;
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}

		/* Style the dropdown content*/
		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #D0D3D4;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		/* Style the links inside the dropdown */
		.dropdown-content a {
		  float: none;
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		/* Add a light blue background on the links and the dropdown button on hover */
		.topnav a:hover, .dropdown:hover .dropbtn {
		  background-color: #EBFBFB;
		  color: black;
		}

		/* Add a light blue background to dropdown links on hover */
		.dropdown-content a:hover {
		  background-color:#EBFBFB ;
		  color: black;
		}

		/* Show the dropdown menu when the user moves the mouse over the dropdown button */
		.dropdown:hover .dropdown-content {
		  display: block;
		}
        #form-back{
            text-align:center;
        }

        #form-back h2{
            color:green;
        }
                
        #first-name {
        width: 30%;
        height: 30px;
        margin: 10px;
        padding: 0 5px;
        margin-left: 78px;
        border-color: black;
        }



        #email {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 73px;
            border-color: black;
        }

        #age {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 89px;
            border-color: black;
        }

        #cont {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            border-color: black;
        }

        #zoom {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 55px;
            border-color: black;
        }

        #date {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 55px;
            border-color: black;
        }




        /*form buttons*/

        #signup {
            height: 30px;
            margin-top: 15px;
            background-color: green;
            border-color: black;
            color: white;
            border-radius: 4px;
        }

        #signup:hover {
            color: green;
            background-color: white;
            border: 2px solid green;
        }

        #main-body {
            margin: 0;
            padding-bottom: 10%;
            background-image: url("../images/talking.jpg");
            width: 100%;
            background-size: cover;
            background-position: center;
        }
		.footer {
		  bottom: 0;
		  left: 0;
		  margin-top:8px;
		  text-align: center;
		  color: black;
		}


    </style>

</head>

<body>
    <!--Navigation-->
	<ul>
	  <li><a href="http://localhost/System/index.php">Home</a></li>
	  <div class="dropdown">
		<button class="dropbtn">Categories
		  <i class="fa fa-caret-down"></i>
		</button>
     <div class="dropdown-content">
      <a href="http://localhost/System/Anger.html">Anger</a>
      <a href="http://localhost/System/Anxiety.html">Anxiety</a>
	  <a href="http://localhost/System/Depression.html">Depression</a>
	    <a href="http://localhost/System/Insomnia.html">Insomnia</a>
	  <a href="http://localhost/System/Stress.html">Stress</a>
    </div>
	  </div>
	  <li><a href="http://localhost/System/counsellors.php">About The Counsellor</a></li>
	  <li><a href="getService.php">Book A Session</a></li>
	  <li><a href="http://localhost/System/faq.html">FAQ</a></li>
	   <div class="dropdown">
		<button class="dropbtn">Log In/Register
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		  <a href="http://localhost/System/My account.php">Log In</a>
		  <a href="http://localhost/System/registation.php">Register</a>
		</div>
	  </div>
	</ul>
    <!--Body-->
    <div id = "main-body">
        <div id="user">
            <h1>Hello, <?php echo $_SESSION['UserName']; ?></h1> 

            <!-- log out button -->
			<a href="../logout.php"><button style="display:inline-block; float:right;" id="out">LOG OUT</button></a>
			
        </div>

        <!-- user   Navigation bar  -->
        <div id="user-navi">
            <li><a id="user-navi-choose" href="getService.php">Get Service</a></li>
            <li><a class="user-navi-item" href="history.php">History</a></li>
            <li><a class="user-navi-item" href="./">My details</a></li>
        </div>
        
        <!-- ger service form -->
        <div style="display: block; padding-left: 20px;">
            <div id="form-back">
                <h2>Get Service</h2>
                <form name="myForm" onsubmit="return validateForm()" method="post">
                    Name:
                    <input id="first-name" placeholder="Name" type="text" name="fname"><br>Age: 
                    <input id="age" placeholder="Age" type="number" name="age"><br>E-mail:
                    <input id="email" placeholder="E-mail Address" type="text" name="ymail"><br> Contact Number:
                    <input id="cont" placeholder="Contact number" type="number" name="contact"><br> Zoom ID:
                    <input id="zoom" placeholder="Zoom ID" type="text" name="zoom"><br>Date time:
                    <input id="date" placeholder="Date time" type="datetime-local"  name="date"><br> Passcode:
                    <input id="code" placeholder="Zoom Passcode" type="text" name="code"><br>
                    <button id="signup" type="submit" name="btnSubmit">Submit</button>
                </form>
            </div>
<!-- php part *************************************************************************************** -->
    <?php 
    require 'config.php';

    if (isset($_POST["btnSubmit"]))
        {
            $firstName = $_POST["fname"];
            $age = $_POST["age"];
            $email = $_POST["ymail"];
            $tele = $_POST["contact"];
            $zoom = $_POST["zoom"];
            //$now = new DateTime();
            //$now->setTimezone(new DateTimeZone('Asia/Colombo')); 
            //$now2 = $now->format('Y-m-d H:i:s');
            $now2 = $_POST['date'];
			$code =$_POST["code"];
            $id =  $_SESSION['member'];

            $query = "SELECT * FROM `services` WHERE `Date` = '$now2'";
            $result = $conn-> query($query);

            if($result-> num_rows > 0) {
         ?>
                <h1 style="color: red">Date time already occupied.</h1>
                <br>
                -Please choose a different time slot.
           <?php     
            }else{
                

            $sql = "INSERT INTO `services` (`Name`, `Age`, `Email`, `Contact`, `ZoomID`, `Date`,`code`, `Member_ID`) VALUES 
                ('$firstName','$age','$email','$tele', '$zoom', '$now2','$code', '$id')";


            if($conn->query($sql)) { 
                ?> <h1 style="color:green;">Request Succesful </h1> <?php
            }else 
            { ?>
                <h1>Delete Fail</h1>
            <?php 
                echo $conn->error;
            }   

        }
            mysqli_close($conn);
        }
    ?>
<!-- end php part *************************************************************************************** -->


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

	  <li><a href="http://localhost/System/index.php">Home</a></li>
	  <li><a href="http://localhost/System/faq.html">Frequently Asked Questions</a></li>
	 </ul>

	 <p>&#x000A9;&nbsp;2022 &middot; <a href="http://localhost/System/index.php">Free Online Therapy</a>
	  &middot; 
	 </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>