<?php


$serverName="localhost";
$userName="root";
$passWord="";
$dbName="fb";



$connect = mysqli_connect("$serverName", "$userName", "$passWord", "$dbName");

if(mysqli_connect_error($connect)){
    echo "error";
}
