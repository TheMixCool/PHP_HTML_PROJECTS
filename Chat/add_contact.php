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
			}
			.AutorisazionBox{
				margin-left:35%;
				margin-right:35%;
				height:16%;
				width:30%;
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
				width:50%;
			}
			#leftPosition{
				margin-left:32%;
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
				url: 'add_contact_script.php',
				data: $(this).serialize(),
				success: function(response)
				{	
				alert(response);
				  var jsonData = JSON.parse(response);
					
				  if (jsonData == "OK")
				  {
					alert("Пользователь добавлен");
					check = true;
					let myForm = document.querySelector("#regForm");
					let submitButton = myForm.querySelector("#addUser");
					myForm.requestSubmit(submitButton);
				  }
				  else if (jsonData =="EMPTY")
				  {
					alert("Есть пустые поля");
				  }
				  else if (jsonData =="SELF")
				  {
					alert("Вы не можете добавить сами себя");
				  }
				  else if (jsonData =="EXIST")
				  {
					alert("Пользователь уже есть в вашем списке контактов");
				  }
				  else if (jsonData =="NOEXISTS")
				  {
					alert("Такого пользователя не существует");
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
				<?echo $_SESSION['username'];?>
				<button>
					<a href = "index.php"> Выход </a>
				</button>
			</div>
				<div align = center>
					<button>
						<a href = "chat_main.php"> На главную </a>
					</button>
					<button>
						<a href = "contacts_list.php"> Список контактов </a>
					</button>
				</div>
		<div class = AutorisazionBox>
			<form method = "post" id ="regForm" novalidate action ="add_contact.php">
				<div class = AutorisazionTextarea>		
					<div class = AutorisazionLogPass> Введите username: </div>
					<input type = 'textarea' name="field1"></input>
				</div>
				
				<div align = center>
					<input name="submit" type="submit" value="Добавить пользователя" id = "addUser"/>
				</div>	
			</form>
		</div>
	</body>
</html>