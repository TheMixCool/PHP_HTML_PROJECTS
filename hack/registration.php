<?php
	
	$conn = mysqli_connect("192.168.193.32", "root", "", "chatdb");
	mysqli_select_db($conn,"chatdb");
					
					if ($_POST) // If form was submited...
					{
						$name = $_POST["field1"]; // Get it into a variable
						$username = $_POST["field2"]; // Get it into a variable
						$pass = $_POST["field3"]; // Get it into a variable
					}
					
					$check = mysqli_query($conn, "SELECT username FROM userlist WHERE username = field2");				
					
					
					if($name !="" && $username!="" && $pass!=""){
						$check2 = mysqli_query($conn, "SELECT COUNT(*) AS num FROM userlist WHERE username = '$username'");	
						$row = mysqli_fetch_assoc($check2);
						$admin = $row['num'];
						if($admin == 0){
							$result = mysqli_query($conn, "INSERT INTO userlist (username,name,password) VALUES ('$username','$name','$pass')");
							echo json_encode("OK");
							mysqli_close($conn);
							exit();
						}
						echo json_encode("ERROR");
						mysqli_close($conn);
						exit();
						
					}
					echo json_encode("EMPTY");					
				mysqli_close($conn);
?>