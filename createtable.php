<?php include 'db.php'; ?>

<?php 

$sql = "CREATE TABLE student 
(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	phone VARCHAR(255),
	address VARCHAR(255),
	password VARCHAR(255)


);";

$result = $connect->query($sql);

if(!$result) {
	echo "create table failed ".$result->error."<br>";
} else {
	echo "create table success<br>";
}

 ?>
