<?php
	session_start();
	$conn = mysqli_connect("127.0.0.1", "root", "root", "chatdb");
	mysqli_select_db($conn,"chatdb");
	
					
					if ($_POST) // If form was submited...
					{
						$username = $_POST["field1"]; // Get it into a variable
						$pass = $_POST["field2"]; // Get it into a variable
					}
					
					
					$sql = mysqli_query($conn, "Select username FROM userlist WHERE username = '$username' AND password = '$pass'");
					
					if($username!="" && $pass!=""){
						if(mysqli_num_rows($sql) > 0){
							
							session_start();
							$session_id = session_id();
							mysqli_query($conn, "INSERT INTO session (session_id, username) VALUES ('$session_id','$username')");
							$_SESSION['username'] = $_POST["field1"];
							
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