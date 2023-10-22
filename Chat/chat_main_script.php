<?php
	session_start();
	$conn = mysqli_connect("127.0.0.1", "root", "root", "chatdb");
	mysqli_select_db($conn,"chatdb");
					if ($_POST) // If form was submited...
					{		
						$message = $_POST["field1"]; // Get it into a variable	
					}
					$name = $_SESSION['username'];
					$receiver = $_SESSION['usernameFriend'];
					if($message!="" ){
						
						$sql = mysqli_query($conn, "INSERT INTO messagelist (id, sender, receiver, MessageText, Date) VALUES 
												(''	, '$name','$receiver','$message ', NOW());");

						echo json_encode("OK");
							mysqli_close($conn);
							exit();
					}
					else{
						echo json_encode("ERROR");
						mysqli_close($conn);
						exit();
					}					
				mysqli_close($conn);
					
?>