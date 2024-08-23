<?php

//Local
// $dsn = "mysql:host=localhost;dbname=bp";
// $user = "root";
// $pass = "";
// $option = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::FETCH_ASSOC];

//Server

$dsn = "mysql:host=localhost;dbname=beauty";
$user = "beauty";
$pass = "SBbE4u=2j3Z!";
$option = [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::FETCH_ASSOC];

try{
 $pdo =  new PDO($dsn,$user,$pass,$option);

}catch(PDOException $e){
	echo $e->getMessage();
}
?>