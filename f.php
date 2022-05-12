<?php 
ob_start();

include("c.php");

if($_POST['submit']=='submit')
{

	$std_name=$_POST['std_name'];
	$std_ph=$_POST['std_ph'];
	$std_add=$_POST['std_add'];


	echo $in="INSERT INTO `sumit`(`std_name`, `std_ph`, `std_add`)VALUES('$std_name','$std_ph','$std_add')";

	$qury=mysqli_query($conn,$in);




}





?>



<html> 



<head>
	
	<title>REGISTRATION</title>
</head>
<body>
	<form name="F" method="POST">
	<table border="5" align="center">


		<tr>
		<td  colspan="2"><h1>REGISTRATION FORM</h1></td>
		
		
	</tr>


	<tr>
		<td>NAME</td>
		<td><input type="text" name="std_name" value=""></td>
		
	</tr>


	

	<tr>
		<td> PHONE NO</td>
		<td><input type="number" name="std_ph" value=""></td>
		
	</tr>


	<tr>
		<td> ADDRESS</td>
		<td><textarea name="std_add"></textarea></td>
		
	</tr>



	<tr>
		
		<td colspan="2"><input type="submit" name="submit" value="submit">
			

		</td>
		
	</tr>





	</table>
	</form>
	

</body>




</html>