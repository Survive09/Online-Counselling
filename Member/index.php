<?php 
session_start();
	if(!isset($_SESSION['member'])){
		header("location: ../My account.php");
	}
?>

<!DOCTYPE html>
<html>

<head>

    <script>
        function validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("First Name must be filled out");
                return false;
            }
            var a = document.forms["myForm"]["lname"].value;
            if (a == "") {
                alert("Last Name must be filled out");
                return false;
            }
            var b = document.forms["myForm"]["ymail"].value;
            if (b == "") {
                alert("Email must be filled out");
                return false;
            }
            var c = document.forms["myForm"]["dat"].value;
            if (c == "") {
                alert("Date must be filled out");
                return false;
            }
            var d = document.forms["myForm"]["country"].value;
            if (d == "") {
                alert("Country must be filled out");
                return false;
            }
            var e = document.forms["myForm"]["contact"].value;
            if (e == "") {
                alert("Contact must be filled out");
                return false;
            }
            var f = document.forms["myForm"]["uname"].value;
            if (f == "") {
                alert("User Name must be filled out");
                return false;
            }
            var g = document.forms["myForm"]["pass"].value;
            if (g == "") {
                alert("Password must be Entered");
                return false;
            }
            if (7 > g){
                alert("Password didn't match for the given criteria");
                return false;
            }
            var h = document.forms["myForm"]["cpass"].value;
            if (h != g) {
                alert("Confirm password didn't match");
                return false;
            }
        }
    </script>
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
        #form-back {
            padding-left: 10%;
            height: 500px;
            display: block;
            padding-left: 5%;
        }

        #form-back h2 {
            color: green;
            text-align: center;
            margin-top: 0%;
            padding-top: 0;
            font-family: Arial, Helvetica, sans-serif;
        }


        /* form inputs */

        #first-name {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 23px;
            border-color: black;
        }

        #last-name {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 50px;
            border-color: black;
        }

        #email {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 51px;
            border-color: black;
        }

        #date {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            border-color: black;
        }

        #coun {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 43px;
            border-color: black;
        }

        #cont {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            border-color: black;
        }

        #uname {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 23px;
            border-color: black;
        }

        #pass {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 33px;
            border-color: black;
        }

        #cpass {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 18px;
            border-color: black;
        }


        /*form buttons*/

        #signup {
            height: 30px;
            margin-top: 15px;
            background-color: #ff0000;
            border-color: black;
            color: white;
            border-radius: 4px;
        }

        #signup:hover {
            color: #ff0000;
            background-color: white;
            border: 2px solid #ff0000;
        }

        #main-body {
            margin: 0;
            padding-bottom: 10%;
            background-image: url("./images/talking.jpg");
            width: 100%;
            background-size: cover;
            background-position: center;
        }
		/*Footer*/
		.footer {
		  bottom: 0;
		  left: 0;
		  margin-top:8px;
		  text-align: center;
		  color: black;
		}


    </style>


    <title>My Details</title>
    <link href="Accounts_style.css" rel="stylesheet" type="text/css">

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
            <li><a class="user-navi-item" href="getService.php">Get Service</a></li>
            <li><a class="user-navi-item" href="history.php">History</a></li>
            <li><a id="user-navi-choose" href="details.php">My details</a></li>
        </div>

        <!-- Update form -->
        <div style="display: block; padding-left: 20px;">

 <!-- get data in data base *********************************************************************** -->
        <?php 
            require 'config.php';      

            $id = $_SESSION['member'];


            $sql = mysqli_query($conn,"SELECT * FROM members WHERE id = $id");
            $result = mysqli_fetch_array($sql);
        ?>

        <!-- update form -->
            <div id="form-back">
                <h2>My Details</h2>
                <form name="myForm" onsubmit="return validateForm()" method="post">
                    First Name:
                    <input id="first-name" placeholder="First Name" type="text" name="fname" value="<?php echo $result["Firstname"]; ?>"> Last Name:
                    <input id="last-name" placeholder="Last Name" type="text" name="lname" value="<?php echo $result["Lastname"]; ?>"><br> E-mail:
                    <input id="email" placeholder="E-mail Address" type="text" name="ymail" value="<?php echo $result["Email"]; ?>"><br> Date of Birth:
                    <input id="date" type="date" name="dat" value="<?php echo $result["Birthday"]; ?>"><br> ID Number:
                    <input id="coun" placeholder="ID Number" type="text" name="$ID_Number" value="<?php echo $result["ID_Number"]; ?>"> Contact Number:
                    <input id="cont" placeholder="Contact number" type="number" name="contact" value="<?php echo $result["Telephone"]; ?>"><br> User Name:
                    <input id="uname" placeholder="Username" type="text" name="uname" value="<?php echo $result["Username"]; ?>"><br> Password:
                    <input id="pass" placeholder="Password min charcter 7" type="password" name="pass" value="<?php echo $result["Password"]; ?>"><br> C.Password:
                    <input id="cpass" placeholder="Confirm Password" type="password" name="cpass"><br>
                    <button id="signup" type="submit" name="btnSubmit">Update</button>
                </form>
            
        <!-- update form php part **************************************************************************** -->
                <?php
                if (isset($_POST["btnSubmit"]))
                {
                    $firstName = $_POST["fname"];
                    $lastName = $_POST["lname"];
                    $email = $_POST["ymail"];
                    $birthDay = $_POST["dat"];
                    $birthDay =  date("Y-m-d", strtotime( $birthDay) );
                    $contry = $_POST["country"];
                    $tele = $_POST["contact"];
                    $userName = $_POST["uname"];
                    $pass = $_POST["cpass"];


                    $sql = "UPDATE `members` SET `Firstname`='$firstName', `Lastname`='$lastName', `Email`='$email', 
                    `Birthday`='$birthDay', `Telephone`=$tele, `Country`='$contry', `Username`='$userName', 
                    `Password`='$pass' WHERE id = $id";


                    if($conn->query($sql)) { 
                        ?> <h3 style="color:green">Update Succesful</h1> <?php 
                    }else 
                    { 
                        ?> <h3 style="color:red">Update Fail</h1> <?php 
                        echo $conn->error;
                    }   
                }
                mysqli_close($conn);
                ?>
        <!-- end of php part ********************************************************************************* -->

            </div>
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

</body>

</html>