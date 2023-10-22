<?php
	session_start();
	$conn = mysqli_connect("127.0.0.1", "root", "root", "chatdb");
	
					
					if ($_POST) // If form was submited...
					{
						$friend = $_POST["field1"]; // Get it into a variable
					}
					
					$owner = $_SESSION['username'];
					$check = mysqli_query($conn, "SELECT COUNT(*) AS num FROM contacts 
														WHERE (usernameFriend = '$friend' AND usernameOwner = '$owner')");									
					$row = mysqli_fetch_assoc($check);
					$admin = $row['num'];
					
					
					if($friend!=""){
						if($admin == 0 && $friend != $owner){	
							mysqli_query($conn, "INSERT INTO contacts (usernameOwner, usernameFriend) VALUES ('$owner','$friend')");
							mysqli_query($conn, "INSERT INTO contacts (usernameOwner, usernameFriend) VALUES ('$friend','$owner')");

							echo json_encode("OK");
							mysqli_close($conn);
							exit();
						}	
					}
					if($friend==""){
						echo json_encode("EMPTY");					
						mysqli_close($conn);
						exit();
					}
					if($admin != 0){
						echo json_encode("EXIST");					
						mysqli_close($conn);
						exit();
					}
					if($friend == $owner){
						echo json_encode("SELF");					
						mysqli_close($conn);
						exit();
					}
					
?>