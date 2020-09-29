<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/form.min.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
	
</body>
</html>
<?php 
	$con = mysqli_connect('localhost','root','','bti');
	
	@$division = $_GET['predivision'];
	@$upzila = $_GET['preupzila'];
	@$perdivision = $_GET['perdivision'];
	@$perupzila = $_GET['perupzila'];
	
	
	if($division!=""){
	$res1 = mysqli_query($con,"Select * from city where div_name = '$division'");
	?>
	<select name="dist" class="inp form-control" id="citydd" onChange = "change_precity();" style="color:black" required >
			<option>Select</option>
	<?php
	while($row = mysqli_fetch_array($res1)){
		?>
		<option value="<?php echo $row['call_name']; ?>"><?php echo $row['city_name']; ?></option>
		
	<?php 
		}
	?>
	</select>
	<?php
	
	
	}
	if($upzila!=""){
	$res2 = mysqli_query($con,"Select * from upzilah where city_name = '$upzila'");
	?>
	<select name="thana" class="inp form-control" style="color:black" required >
	<option>Select</option>
	<?php
	while($row = mysqli_fetch_array($res2)){
		?>
		<option value="<?php echo $row['up_name']; ?>"><?php echo $row['up_name']; ?></option>
	<?php 
		}
	?>
	</select>
	<?php
	
	}
	//permanent
	if($perdivision!=""){
	$res3 = mysqli_query($con,"Select * from city where div_name = '$perdivision'");
	echo "<select name='pdist' class='inp form-control' id='per_city' onChange = 'change_percity()' style='color:black' required >";
			echo "<option>Select</option>";
	while($row = mysqli_fetch_array($res3)){
		echo "<option value= '$row[call_name]'>"; echo $row['city_name']; echo"</option>";
	}
	echo "</select>";
	
	
	}
	if($perupzila!=""){
	$res4 = mysqli_query($con,"Select * from upzilah where city_name = '$perupzila'");
	echo "<select name='pthana' id='per_upzila' class='inp form-control' style='color:black' required >";
	echo "<option>Select</option>";
	while($row = mysqli_fetch_array($res4)){
		echo "<option value= '$row[up_name]'>"; echo $row['up_name']; echo"</option>";
	}
	echo "</select>";
	
	
	}
	
	?>