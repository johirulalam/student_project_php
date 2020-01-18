<?php 

//server connect

$connect = mysqli_connect('localhost', 'root', '');

//create database

$query = "CREATE DATABASE student11;";
$result = $connect->query($query);


if(!$result) {
	echo "database creation failed ".$connect->error."<br>";
} else {
	echo "database creation success<br>";
}


 ?>