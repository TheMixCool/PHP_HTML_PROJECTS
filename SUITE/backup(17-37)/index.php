<DOCTYPE html>
<html>
	<head>
		<title>MEOR</title>
		<link rel="stylesheet" href="style_of_disks(admin).css">
		<meta charset = "utf-8">
	</head>
	<?php
		session_start();
		$conn = mysqli_connect("suite", "root", "root", "bacteries");
		mysqli_select_db($conn,"bacteries");
	?>
	<body class="back">
		
		
		<div class="leftblock">
			<form method="post">
				<h1>Criteria</h1>
				<div class="filter2">
					Temperature: 
					<input placeholder="Initial value" type="text" name = "tempStart">
					<input placeholder="Final value" type="text" name = "tempEnd">
				</div>
				<br><br><br><br>
				<div class="filter2">
					C:<br>
						<select name = "Ca"> 
							<option></option>
							<option>glucose</option>
							<option>glycerol</option>
							<option>sodium citrate</option>
							<option>sunflower oil</option>
							<option>sucrose</option>
							<option>lactose</option>
							<option>soybean oil</option>
							<option>yeast extract</option>	
					</select>
				</div>
				<br>
				<div class="filter2">
					pH: <br>
					<input placeholder="Initial value" type="text" name = "phStart">
					<input placeholder="Final value" type="text" name = "phEnd">
				</div>
				<br>
				<div class="filter2">
					Salinity (g/L):<br>
					<input placeholder="Initial value" type="text" name = "salStart">
					<input placeholder="Final value" type="text" name = "salEnd">
				</div>
				<br>
				<div class="filter2">
					Surface tension(mN/m):<br> 
					<input placeholder="Initial value" type="text" name = "STStart">
					<input placeholder="Final value" type="text" name = "STEnd">
				</div>
				<br>
				<div class="filter2">
					Emulsifcation(%):<br> 
					<input placeholder="Initial value" type="text" name = "emulStart">
					<input placeholder="Final value" type="text" name = "emulEnd">
				</div>
				<br>
				<div class="filter2">
					CMC (mg/L):<br> 
					<input placeholder="Initial value" type="text" name = "cmcStart">
					<input placeholder="Final value" type="text" name = "cmcEnd">
				</div>
				<div class="filter2">
					<input type="submit" value="Submit">
				</div>
			</form>
		</div>
		
		<?
			if($_POST){
				
				$tempStart = $_POST["tempStart"];
				$tempEnd = $_POST["tempEnd"];
				$C = $_POST["C"];
				$phStart = $_POST["phStart"];
				$phEnd = $_POST["phEnd"];
				$salStart = $_POST["salStart"];
				$salEnd = $_POST["salEnd"];
				$stStart = $_POST["STStart"];
				$stEnd= $_POST["STEnd"];
				$emulStart = $_POST["emulStart"];
				$emulEnd = $_POST["emulEnd"];
				$cmcStart = $_POST["cmcStart"];
				$cmcEnd = $_POST["cmcEnd"];
			}
			
			if($_POST["tempStart"] == "" &&
			$_POST["tempEnd"] == "" && 
			$_POST["C"] == "" &&
			$_POST["phStart"] == "" && 
			$_POST["phEnd"] == "" &&
			$_POST["salStart"] == "" && 
			$_POST["salEnd"] == "" &&
			$_POST["STStart"] == "" && 
			$_POST["STEnd"] == "" &&
			$_POST["emulStart"] == "" &&
			$_POST["emulEnd"] == "" &&
			$_POST["cmcStart"] == "" &&
			$_POST["cmcEnd"] == ""){
				$result = mysqli_query($conn, "SELECT * FROM data");
			}
			else{ 
				if($tempStart == "" && $tempEnd == ""){
					$tempStart = 0;
					$tempEnd = 1000;
				}
				if($phStart == "" && $phEnd == ""){
					$phStart = 0;
					$phEnd = 100;
				}
				if($salStart == "" && $salEnd == ""){
					$salStart = 0;
					$salEnd = 2000;
				}
				if($stStart == "" && $stEnd == ""){
					$stStart = 00;
					$stEnd = 60;
				}
				if($emulStart == "" && $emulEnd == ""){
					$emulStart = 0;
					$emulEnd = 200;
				}
				if($cmcStart == "" && $cmcEnd == ""){
					$cmcStart = 0;
					$cmcEnd = 1000;
				}
				if($C == ""){
					$C = 0;
				}
				
				$result = mysqli_query($conn, "SELECT * FROM data 
				WHERE (((TempStart <= '$tempEnd' AND TempEnd >= '$tempEnd') OR
						(TempStart <= '$tempStart' AND TempEnd >= '$tempStart') OR
						'$tempStart' = 0) AND
						((phStart <= '$phEnd' AND phEnd >= '$phEnd') OR
						(phStart <= '$phStart' AND phEnd >= '$phStart') OR 
						'$phStart' = 0) AND
						((SalStart <= '$salEnd' AND SalEnd >= '$salEnd') OR
						(SalStart <= '$salStart' AND SalEnd >= '$salStart') OR 
						'$salStart' = 0))
						");
			}
			
		?>
		
		<?
			echo "<table><br>";
        while ($row = mysqli_fetch_assoc($result)){
			echo "</td><td width=25%>";?>
            <div><h3><?echo $row['Article'];?></h3>
			<br><br>
            </div>
			<?echo "</td><td width=10%>";?>
            <div><i><?echo $row['Bacteria'] ;?></i>
            </div><br><br>
			<?echo "</td><td width=10%>";?>
            <div><?echo $row['Classification'];?>
            </div><br><br>

			<?echo "</td><td width=8%>";?>
            <div><?echo $row['C'];?>
			<div>
			 
			<br>
			<? echo "</td><td width=15%>";
			if($row['TempStart'] != $row['TempEnd'] ){
				?> Temperature: <?echo $row['TempStart'];?> - <?echo $row['TempEnd'];
			}
			elseif($row['TempStart'] != NULL){
				?> Temperature: <?echo $row['TempStart'];
			}
			
			?>
			<br> 
			<?
			if($row['phStart'] != $row['phEnd'] ){
				?> pH: <?echo $row['phStart'];?> - <?echo $row['phEnd'];
			}
			elseif($row['phStart'] != NULL){
				?> pH: <?echo $row['phStart'];
			}
			
			
			?>
			<br> 
			<?
			if($row['SalStart'] != $row['SalEnd'] ){
				?> Salinity (g/L): <?echo $row['SalStart'];?> - <?echo $row['SalEnd'];
			}
			elseif($row['SalStart'] != NULL){
				?> Salinity (g/L): <?echo $row['SalStart'];
			}
			
			?>
			<br> 
			<?
			if($row['STStart'] != $row['STEnd']){
				?> Surface tension(mN/m): <?echo $row['STStart'];?> - <?echo $row['STEnd'];
			}
			elseif($row['STStart'] != NULL){
				?> Surface tension(mN/m): <?echo $row['STStart'];
			}
			
			?>
			<br> 
			<?
			if($row['EmStart'] != $row['EmEnd'] ){
				?> Emulsifcation(%): <?echo $row['EmStart'];?> - <?echo $row['EmEnd'];
			}
			elseif($row['EmStart'] != NULL){
				?> Emulsifcation(%): <?echo $row['EmStart'];
			}
			
			?>
			<br> 
			<?
			if($row['CMCStart'] != $row['CMCEnd'] ){
				?>CMC (mg/L): <?echo $row['CMCStart'];?> - <?echo $row['CMCEnd'];
			}
			elseif($row['CMCStart'] != NULL){
				?>CMC (mg/L): <?echo $row['CMCStart'];
			}
			
			?>

		</div><br><br>
			<?echo "</td><td width=5%>";?>
            <div><?echo "<a href='".$row['ref']."'>Download</a>";?>
            </div><br><br>
			
          <?echo "</td><tr>";
        }
        echo "</table>";
		
      ?>
		</div>
	</body>
</html>