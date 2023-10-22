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
				height:55%;
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
				text-align:center;
				color:black;
				font-size:14;
				margin-top: 5px;
				margin-bottom:5px;	
				margin-left: 5px;
				margin-right: 5px;
				align-items:center;
				width:250px;
				height:30px;
				transition: 0.2s;
				display: inline-block;
				border: 1px solid black;
				width:50%;
  
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
				url: 'registration.php',
				data: $(this).serialize(),
				success: function(response)
				{	
				  var jsonData = JSON.parse(response);
					
				  if (jsonData == "OK")
				  {
					check = true;
					let myForm = document.querySelector("#regForm");
					let submitButton = myForm.querySelector("#createUser");
					myForm.requestSubmit(submitButton);
				  }
				  else if (jsonData =="ERROR"){
					alert("Пользователь с таким ником уже существует.");
				  }
				  else if (jsonData =="EMPTY"){
					alert("Имеются пустые поля.");
					//error message here
				  }
				 }
			  });  
			}
		});
		});
		</script>
		
		
	</head>
	<body>
		<div class = AutorisazionBox>
			<div class = AutorisazionText>
				Регистрация
			</div>
			<br>
			
			
			<form method = "post" id ="regForm" novalidate action ="index.php">
				<div class = AutorisazionTextarea>		
					<div class = AutorisazionLogPass> Name </div>
					<input type = 'textarea' name="field1"></input>
				</div>
				<div class = AutorisazionTextarea>	
					<div class = AutorisazionLogPass> Username </div>
					<input type = 'textarea' name="field2"></input>
				</div>
				<div class = AutorisazionTextarea>	
					<div class = AutorisazionLogPass> Password </div>
					<input  type = password name="field3"></input>
				</div>
				<div align = center>
					<input name="submit" type="submit" value="Создать учетную запись" id = "createUser"/>
				</div>	
			</form>
			

			<div>	<!-- new user-->
				<a href = "index.php">
					<div class = hypelink>
						Уже есть учетная запись?
					</div>
				</a>
			</div>
		</div>
	</body>
</html>



