<?session_start();?>
<html>
	<head>
		<meta http-equiv="Refresh" content="60" />
		<style>
			body{
				background:linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(218,216,247,1) 60%, rgba(163,157,255,1) 90%, rgba(138,132,255,1) 100%);
			}
			.AutorisazionBox{
				margin-left:10%;
				margin-right:10%;
				margin-top:15px;
				height:70%;
				width:80%;
				position: static;
				background:white;
				border:3px solid grey;
				overflow: scroll;
			}
			.AutorisazionText{
				text-align:center;
				color:black;
				font-size:25;
				margin-top:5px;
			}
			.AutorisazionLogPass{
				text-align:center;
				color:black;
				font-size:18;
				margin-top:10px;
			}
			
			.AutorisazionBox2{
				margin-left:25%;
				margin-right:25%;
				margin-top:15px;
				height:5%;
				width:50%;
				position: static;
				background:white;
				border:3px solid grey;
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
			
			button{
				text-align:center;
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
			.newMessageButton{
				
				width:250;
				height:50;
				background:pink;
				font-size:22;
				margin-left:25%;
			}
			.newMessageButton2{
				
				width:200;
				height:40;
				background:pink;
				font-size:20;
				margin-left:25%;
			}
			.leftPosition{
				margin-left:85%;
				margin-right:5%;
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
			.inpclass { 
			resize: none; 
			width: 75%;
			height: 80%;
			margin-right:4px;
			margin-left:4px;
			margin-bottom:4px;
			margin-top:4px;
			}
			.inpclass2 { 
			resize: none; 
			width: 20%;
			height: 80%;
			margin-right:4px;
			margin-left:4px;
			margin-bottom:4px;
			margin-top:4px;
			}
			.inpclass3 { 
			resize: none; 
			width: 25%;
			height: 80%;
			margin-right:4px;
			margin-left:4px;
			margin-bottom:4px;
			margin-top:4px;
			}
			.AutorisazionBox3{
				margin-left:25%;
				margin-right:25%;
				margin-top:15px;
				height:30px;
				width:50%;
			}
			
			
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = "text/javascript">

		var check = false;
		$(document).ready(function() {
		$('#regForm').submit(function(e) {    // #regForm
			if (!check) {
			  e.preventDefault();
			  $.ajax({
				type: "POST",
				url: 'chat_main_script.php',	//chat_main_script
				data: $(this).serialize(),
				success: function(response)
				{	
				
				  var jsonData = JSON.parse(response);
				  if (jsonData == "OK")
				  {
					
					check = true;
					let myForm = document.querySelector("#regForm");		//regForm
					let submitButton = myForm.querySelector("#enterMessage"); 		//enterMessage
					myForm.requestSubmit(submitButton);
				  }
				  else if (jsonData =="ERROR"){ 			//error
					alert("Неправильный логин или пароль");
				  }
				 
				 }
			  });  
			}
		});
		});
		</script>
		
		<script type = "text/javascript">

		var check = false;
		$(document).ready(function() {
		$('#regForm2').submit(function(e) {
			if (!check) {
			  e.preventDefault();
			  $.ajax({
				type: "POST",
				url: 'chat_main_script.php',
				data: $(this).serialize(),
				success: function(response)
				{	
				
				  var jsonData = JSON.parse(response);
				  if (jsonData == "OK")
				  {
					
					check = true;
					let myForm = document.querySelector("#regForm2");
					let submitButton = myForm.querySelector("#changeReceiver");
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
		
			<div align = right>
				Имя авторизированного пользователя: 
				<?echo $_SESSION['username'];
				$owner = $_SESSION['username'];?>
				<button>
					<a href = "index.php"> Выход </a>
				</button>
			</div>
		<div class = AutorisazionBox3 align = center>
				<button>
					<a href = "contacts_list.php"> Список контактов </a>
				</button>
		</div>
		
		<div class = AutorisazionBox>
			<div>
				<?php
				$conn = mysqli_connect("192.168.193.32", "root", "", "chatdb");
				$receiver = $_SESSION['usernameFriend'];
				$getLastMessage = mysqli_query($conn, "SELECT * FROM messagelist");		
				echo "<table><br>";
				while ($row = mysqli_fetch_assoc($getLastMessage)){			
					echo "</td><td width=100px height =50px>";?>
					<div>
						<?echo $row['sender'];
						echo ":"?>
					</div>
					<?echo "</td><td width=1050px height =50px>";?>
					<div>
						
						<!-- htmlentities -->
						<?echo ($row['MessageText']);?>
							
						
					</div>
					<?echo "</td><td width=50px height =50px>";?>
					<div>
						<?echo $row['Date'];?>
					</div>
					<?echo "</td><tr>";
					}
				echo "</table>";?>
			</div>				
		</div>	
		<div class = AutorisazionBox2>
			<form method = "post" id ="regForm" novalidate action ="chat_main.php">	
				<input class = inpclass type = 'text' name="field1"></input>

				<!-- -->
					<input class = inpclass2 name="submit" type="submit" value="Отправить" id = "enterMessage"/>
				
			</form>
		</div>	
	</body>
</html>
