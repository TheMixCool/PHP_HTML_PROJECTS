<DOCTYPE html>
<html>
	<head>
		<title>Главная</title>
		<link rel="stylesheet" href="style_of_disks(admin).css">
		<meta charset = "utf-8">
	</head>
	<?php
		session_start();
		$conn = mysqli_connect("suite", "root", "root", "suite");
		mysqli_select_db($conn,"suite");
	?>
	<body class="back">
		
		
		<div class="leftblock">
			<form method="post">
				<h1>Фильтр</h1>
				<div class="filter2">
					<div class="word">Автор</div>
					<select name = "check1"> 
						<option></option>
						<option>Ariana Grande</option>
						<option>Johnny Cash</option>
						<option>Бутырка</option>
						<option>Кис-кис</option>
					</select>
				</div>
				<div class="filter2">
					<div class="word">Жанр</div>
					<select name = "check2"> 
						<option></option>
						<option>Рок</option>
						<option>Поп</option>
						<option>Кантри</option>
						<option>Шансон</option>
						<option>Пост-хардкор</option>
						<option>Рэп</option>
						<option>Классика</option>
					</select>
				</div>
				<div class="filter2">
					<div class="word">Год</div>
					<select name = "check3"> 
						<option></option>
						<option>2020</option>
						<option>2019</option>
						<option>2018</option>
						<option>2017</option>
						<option>2016</option>
						<option>2015</option>
						<option>2014</option>
						<option>2013</option>
						<option>2012</option>
						<option>2011</option>
						<option>2010</option>
						<option>2009</option>
						<option>2008</option>
						<option>2007</option>
						<option>2006</option>
						<option>2005</option>
						<option>2004</option>
						<option>2003</option>
					</select>
				</div>
				<div class="filter2">
				<input type="submit" value="Применить">
				</div>
			</form>
		</div>
		
		<?
			if($_POST){
				
				$aut = $_POST["check1"];
				$genre = $_POST["check2"];
				$year = $_POST["check3"];
				$name = $_POST["searchfield"];
			}
			if($aut == "" && $genre == "" && $year == "" && $name == ""){
				$result = mysqli_query($conn, "SELECT * FROM disks");
			}
			else if ($aut == "" && $genre == "" && $year != "" && $name == ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE year ='$year'");
			}
			else if ($aut == "" && $genre != "" && $year == "" && $name == ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE genre ='$genre'");
			}
			else if ($aut != "" && $genre == "" && $year == "" && $name == ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE author ='$aut'");
			}
			else if ($aut == "" && $genre == "" && $year == "" && $name != ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE name ='$name'");
			}
			else if ($aut != "" && $genre != "" && $year == ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE (author ='$aut' AND genre = '$genre')");
			}
			else if ($aut != "" && $genre == "" && $year != ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE (author ='$aut' AND year = '$year')");
			}
			else if ($aut == "" && $genre != "" && $year != ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE (genre ='$genre' AND year = '$year')");
			}
			else if ($aut != "" && $genre != "" && $year != ""){
				$result = mysqli_query($conn, "SELECT * FROM disks WHERE (year ='$year' AND genre = '$genre' AND author ='$aut')");
			}
						
		?>
		
		
		<div class="sep">
		
		
		
		<?
			echo "<table><br>";
        while ($row = mysqli_fetch_assoc($result)){
			echo "<tr><td width=50px>";?>
          <div><?echo $row['id']; echo '.';
          echo "<td><td width=300px>";?>
            <img width = 150 src ="<?echo $row['image'];?>"<br><br><br><br>
          <?echo "</td><td width=250px>";?>
            <div><?echo $row['name'];?>
            </div>
          <?echo "</td><td>";?>
            <?echo "</td><td width=250px>";?>
            <div><?echo $row['author'];?>
            </div>
			<?echo "</td><td width=250px>";?>
            <div><?echo $row['genre'];?>
            </div>
			<?echo "</td><td width=250px>";?>
            <div><?echo $row['year'];?>
            </div>
			<?echo "</td><td width=500px>";?>
            <div><?echo $row['description'];?>
            </div>
			<?echo "</td><td width=400px>";?>
            <div>Цена:</div><div><?echo $row['price'];?> ₽</div>
          <?echo "</td><tr>";
        }
        echo "</table>";
      ?>
		</div>
	</body>
</html>