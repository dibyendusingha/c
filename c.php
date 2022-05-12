<?php 

ob_start();


$servername="localhost";
$username="root";
$password="";
$database="sumit";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){

	echo die("connection error".mysqli_connect_error());


}
else{

echo "connection successfull";

}





?>