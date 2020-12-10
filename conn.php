<?php

//$host = "matzgroup17.ipagemysql.com";
//$user = "pharmacy";
//$pwd = "pharmacy";
//$dbName = "pharmacy";

$host = "localhost";
$user = "root";
$pwd = "";
$dbName = "pharmacy";

$conn = mysqli_connect($host, $user, $pwd, $dbName);
if (!$conn) {
	echo "Connection Problem";
}

?>