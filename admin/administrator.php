<?php 
session_start();

if (!isset($_SESSION['admin'])) {
    header("location: ../My account.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin | Online Counselling</title>
    <link rel="stylesheet" href="Accounts_style.css" type="text/css">

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
        table {
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: "Arial", Helvetica, sans-serif;
            font-size: 16px;
            text-align: left;
            float: right;
        } 
        th {
            background-color: black;
            color: white;
            padding-left:13px;

        }
        tr:nth-child(even) {background-color: #f2f2f2}
        td{
            padding-left:13px;
        }

        #btnDelete{
            height: 25px;
            margin-top: 0px;
            background-color: #ff0000;
            border-color: black;
            color: white;
            border-radius: 4px;
        }

        #btnDelete:hover {
            color: #ff0000;
            background-color: white;
            border: 2px solid #ff0000;
        }

        #main-body {
            margin: 0;
            padding-bottom: 20%;
			background-color: #A3D7FD;
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
        }
				#add{
			color:white;
			background-color:green;
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
    <!--Body-->
    <div id="main-body">
        <div id="user">
            <h1>Hello,  <?php echo $_SESSION['UserName']; ?></h1>

            <!-- log out button -->
			<a href="../logout.php"><button style="display:inline-block; float:right;" id="out">LOG OUT</button></a>

        </div>

        <!-- user   Navigation bar  -->
        <div id="user-navi">
        	<li><a id="user-navi-choose" href="index.php">Dashboard</a></li>
            <li><a id="user-navi-choose" href="#">Administrator</a></li>
            <li><a class="user-navi-item" href="Members.php">Members</a></li>
            <li><a class="user-navi-item" href="Counsellers.php">Counsellors</a></li>
            <li><a class="user-navi-item" href="Service.php">Services</a></li>

        </div>
        <div style="display: inline-block; padding-left: 10%;">
            
        <!-- administators table -->
            <table>
                <caption>Administrators</caption>
                <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Telephone </th>
                    <th>User Name </th>
                    <th>Password </th>
                    <th>Delete</th>
                </tr>
        <!-- get data form database to table (php part) ****************************************** -->
                <?php
                    require 'config.php';

                    $sql = "SELECT * FROM administrators";
                    $result = $conn-> query($sql);

                    if($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                           
                            echo "<tr><td>". $row["id"] ."</td><td>". $row["Name"] ."</td><td>". 
                            $row["Email"] ."</td><td>". $row["Telephone"] ."</td><td>". $row["UserName"]
                            ."</td><td>". $row["Password"] ."</td><td>";
                            ?> <form method="post" action="delete.php">
                                <input type="hidden" name="table" value="administrators">
                                <input type="hidden" name="delete" value="<?php echo $row["id"]; ?>">
                                <button type="submit"  id="btnDelete">Delete</button>
                           </form> </td></tr> <?php

                        }
                        echo "</table>";
                    }
                    else {
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
        <!-- end of php part ***********************************************************8 -->
                <br>
                <a href="adminUpdate.php"><button id="add">Add New</button></a>
            </table>

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