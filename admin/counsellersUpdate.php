
<?php ob_start();
?>
<head>
    <title>Online Personal Counselling</title>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("First Name must be filled out");
                return false;
            }
            var xy = document.forms["myForm"]["lname"].value;
            if (xy == "") {
                alert("Last Name must be filled out");
                return false;
            }
            
            var b = document.forms["myForm"]["ymail"].value;
            if (b == "") {
                alert("Email must be filled out");
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

        #form-back{
            text-align:center;
        }

        #form-back h2{
            color:blue;
        }
                
        #first-name {
        width: 30%;
        height: 30px;
        margin: 10px;
        padding: 0 5px;
        margin-left: 78px;
        border-color: black;
        }
        #last-name {
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
            margin-left: 45px;
            border-color: black;
        }

        #pass {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 55px;
            border-color: black;
        }

        #cpass {
            width: 30%;
            height: 30px;
            margin: 10px;
            padding: 0 5px;
            margin-left: 41px;
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

        body {
            margin: 0;
            padding-bottom: 10%;
            background-image: url("images/registerback.jpg");
            width: 100%;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

    </style>
</head>
<body>

    <!-- admin insert form -->
    <div id="form-back">
            <h2>Counsellor Registation</h2>
            <form name="myForm" onsubmit="return validateForm()" method="post">
            First Name:
                <input id="first-name" placeholder="First Name" type="text" name="fname"><br> Last name:
                <input id="last-name" placeholder="Last Name" type="text" name="lname"><br> E-mail:
                <input id="email" placeholder="E-mail Address" type="text" name="ymail"><br> Identity Number:
                <input id="cont" placeholder="Identity Number" type="text" name="Identity"><br> Contact Number:
                <input id="cont" placeholder="Contact" type="tel" name="cont"><br> User Name:
                <input id="uname" placeholder="Username" type="text" name="uname"><br> Password:
                <input id="pass" placeholder="Password min charcter 7" type="password" name="pass"><br> C.Password:
                <input id="cpass" placeholder="Confirm Password" type="password" name="cpass"><br>
                <button id="signup" type="submit" name="btnSubmit">Submit</button>
            </form>

    </div>
</body>

<!-- send data to database(php part) ****************************************** -->
<?php 
    require 'config.php';

    if (isset($_POST["btnSubmit"]))
        {
            $firstName = $_POST["fname"];
            $lastName = $_POST["lname"];
            $email = $_POST["ymail"];
            $Identity = $_POST['Identity'];
            $tele = $_POST["cont"];
            $userName = $_POST["uname"];
            $pass = $_POST["cpass"];

            $sql = "INSERT INTO counsellors SET

              firstName = '$firstName',
              lastName = '$lastName',
              email = '$email',
              Identity = '$Identity',
              Contact = '$tele',
              userName = '$userName',
              password = '$pass'
              ";

            if($conn->query($sql)) { 
                header('Location: Counsellers.php');
                //ob_enf_fluch();
            }else 
            { ?>
                <h1>Registration Fail</h1>
            <?php 
                echo $conn->error;
            }   

            mysqli_close($conn);
        }
?>