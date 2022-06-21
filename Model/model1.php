<?php

$host="localhost";
$u="root";
$p="";
$database="crowfd";

try{
	$con=new PDO("mysql:host=$host;dbname=$database",$u,$p);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $error){
	$error->getMessage();

}

?>