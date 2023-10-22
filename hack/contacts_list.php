<?session_start();?>
<html>
	<head>
		<style>
			body{
				background:linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(218,216,247,1) 60%, rgba(163,157,255,1) 90%, rgba(138,132,255,1) 100%);
			}
			.AutorisazionText{
				text-align:center;
				color:black;
				font-size:20;
				margin-top:2%;
			}
			.AutorisazionLogPass{
				text-align:center;
				color:black;
				font-size:18;
				margin-top:10px;
			}
			.AutorisazionBox{
				margin-top:1%;
				margin-left:25%;
				margin-right:25%;
				height:80%;
				width:50%;
				position: static;
				background:white;
				border:3px solid grey;
				overflow: scroll;
			}
			.AutorisazionTextarea{
				text-align:center;
				color:black;
				font-size:20;
				
			}
			.hypelink{
				font-size:14;
				color:blue;
				text-align:center;
				margin-top:10px;
				text-decoration:none;
			}
			.hypelink:hover{
				text-decoration:underline;
			}
			button{
				
				color:black;
				font-size:15;
				margin-top:5px;
				margin-bottom:5px;
				margin-left:5px;
				margin-right:5px;
				width:150px;
				transition: 0.2s;
				border: 1px solid black;
			}
			button:active{
				background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(218,216,247,1) 60%, rgba(163,157,255,1) 90%, rgba(138,132,255,1) 100%); 
			}
			a{
				text-decoration:none;
				color: black;
			}
			a:hover{
				text-decoration:none;
				color: black;
			}
			a:active{
				text-decoration:none;
				color: black;
			}
			div{
				border: 1px dotted black;
				margin-top: 5px;
				margin-bottom:5px;	
				margin-left: 5px;
				margin-right: 5px;
			}
			input{
				margin-top: 5px;
				margin-bottom:5px;	
				margin-left: 5px;
				margin-right: 5px;
			}
			#leftPosition{
				margin-left:25%;
				margin-right:5%;
			}
			#rightPosition{
				margin-right:25%;
				margin-left:5%;
			}
			.inpclass2 { 
			resize: none; 
			width: 20%;
			height: 80%;
			margin-right:3%;
			margin-left:4px;
			margin-bottom:4px;
			margin-top:4px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = "text/javascript">

		var check = false;
		$(document).ready(function() {
		$('#regForm').submit(function(e) {
			if (!check) {
			  e.preventDefault();
			  $.ajax({
				type: "POST",
				url: 'new_message.php',
				data: $(this).serialize(),
				success: function(response)
				{	
				
				  var jsonData = JSON.parse(response);
				  if (jsonData == "OK")
				  {
					
					check = true;
					let myForm = document.querySelector("#regForm");
					let submitButton = myForm.querySelector("#switchUser");
					myForm.requestSubmit(submitButton);
				  }
				  else if (jsonData =="ERROR"){
					alert("Неправильный логин или пароль");
				  }
				 
				 }
			  });  
			}
		});
		});
		</script>
		
	</head>
	<body>
	
	<?$owner = $_SESSION['username'];?>
		<div align = right>
				Имя авторизированного пользователя: 
				<?echo $owner;?>
				<button>
					<a href = "index.php"> Выход </a>
				</button>
			</div>
		
			
					<div align = center>
						<button id = leftPosition>
							<a href = "chat_main.php"> На главную </a>
						</button>
						<button id = rightPosition>
							<a href = "add_contact.php"> Добавить контакт </a>
						</button>
					</div>
			
		<div class = AutorisazionBox>
			<div class = AutorisazionText>
				Список контактов
			</div>
			<div>
				<?php
				$conn = mysqli_connect("192.168.193.32", "root", "", "chatdb");
				$getLastMessage = mysqli_query($conn, "SELECT * FROM contacts where usernameOwner = '$owner' ");		
				echo "<table>";
				while ($row = mysqli_fetch_assoc($getLastMessage)){			
					echo "</td><td width=900px height =30px>";?>
					<div align = right>
					<form method ="post" id ="regForm" novalidate action ="chat_main.php">
						<input readonly type = textarea value = '<?echo $row['usernameFriend'];?>' name = 'usernameFriend'>
						
							<input class = inpclass2 name="submit" type="submit" value="Открыть диалог" id = "switchUser"/>
						</form>
					</div>
					<?echo "</td><td width=10px height =30px>";?>				
					<?echo "</td><tr>";
					}
				echo "</table>";?>
			</div>
		</div>
		
	</body>
</html>