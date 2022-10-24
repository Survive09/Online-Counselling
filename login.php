<?php
	include 'db/config.php';
	session_start();

	$conn = $pdo->open();

	if(isset($_POST['btnSubmitMember'])){ #Member login checker
		
		$email = $_POST['user'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM members WHERE Email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
			
					if($password == $row['Password']){
						
							$_SESSION['member'] = $row['id'];
							$_SESSION['UserName'] = $row['Username'];
							header('location: Member/');
					}
					else{
						echo '<h2 style="color: red;">Wrong password!';
					}
				}
			
			
			else{
				echo '<h2 style="color: red;">Email not found!';
			}
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}elseif (isset($_POST['btnSubmitAdmin'])) { #admin login checker
		
		$email = $_POST['user'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM administrators WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
			
					if($password == $row['Password']){
						
							$_SESSION['admin'] = $row['id'];
							$_SESSION['UserName'] = $row['UserName'];
							header('location: ./');
					}
					else{
						echo '<h2 style="color: red;">Wrong password!';
					}
				}
			
			
			else{
				echo '<h2 style="color: red;">Email not found!';
			}
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	elseif (isset($_POST['btnSubmitCounsellor'])) { #Counsellor login checker
		
		$email = $_POST['user'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM counsellors WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
			
					if($password == $row['Password']){
						
							$_SESSION['councillor'] = $row['id'];
							$_SESSION['UserName'] = $row['Username'];
							header('location: ./');
					}
					else{
						echo '<h2 style="color: red;">Wrong password!';
					}
				}
			
			
			else{
				echo '<h2 style="color: red;">Email not found!';
			}
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		header('location: ./');
	}

	$pdo->close();

	

?>