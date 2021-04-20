<?php 






$hostname = "localhost";
$username ="root";
$password="";
$dbname="db_test";

$connect =mysqli_connect($hostname,$username,$password,$dbname);


if($connect->connect_error){
die("Connection failed: ".$connect->connect_error);
}
else{
    echo "Successfully Connected";
}





?>