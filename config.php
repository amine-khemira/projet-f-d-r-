<?php
$servername="localhost";
$username="root";
$password="";
$database="mydb";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
    die("connection failed".mysqli_connect_error());
}
echo "connected";