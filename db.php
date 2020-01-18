<?php 

//connect database

$connect = new mysqli ('localhost', 'root', '', 'student11');

if(!$connect) {
	echo "database connect failed ".$connect->error."<br>";
} else {
	//echo "database connect success<br>";
}

 ?>