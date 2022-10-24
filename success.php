<success.php>

<!DOCTYPE html>
<html>

<?php 
  /*  session_start();

    if (isset($_SESSION['visited'])) {
        header("Location: http://localhost/all/My account.php");
        unset($_SESSION['visited']);
    } else {
        $_SESSION['visited'] = true;
    }

*/?>

<head>
    <title>Online Personal Counselling</title>
    <link href="success_style.css" rel="stylesheet">
</head>


<body>
    
    <div id="main">
<!-- PHP part ********************************************************************************** -->
    <?php 

       require 'config.php';

        if (isset($_POST["btnSubmit"]))
        {
            $firstName = $_POST["fname"];
            $lastName = $_POST["lname"];
            $email = $_POST["ymail"];
            $birthDay = $_POST["dat"];
            $birthDay =  date("Y-m-d", strtotime( $birthDay) );
            $Identity = $_POST["IDno"];
            $tele = $_POST["contact"];
            $userName = $_POST["uname"];
            $pass = $_POST["cpass"];
			$status=0;
			$activationcode=md5($email.time());


            $sql = "INSERT INTO `members` (`FirstName`, `LastName`, `Email`, `Birthday`, `Telephone`, `Identity`, `Username`, `Password`,`activationcode`,`status`) 
            VALUES ('$firstName', '$lastName','$email','$birthDay',$tele,'$Identity','$userName','$pass''$activationcode','$status')";


            if($conn->query($sql)) { 
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

<!-- end of php part ******************************************************************************************* -->
        <div id="data">
            <h3>Welcome, <?php echo $userName ?></h3><br><br>
            First Name : <?php echo $firstName ?> <br><br>
            Last Name  : <?php echo $lastName ?> <br><br>
            Email      : <?php echo $email ?> <br><br>
            Birthday   : <?php echo $birthDay ?> <br><br>
            ID Num   : <?php echo $Identity ?> <br><br>
            Con. Num   : <?php echo $tele ?> <br><br><br>

            <a href ="My account.php"><button>LOGIN</button></a>

        </div>
    </div>

</body>

</html>