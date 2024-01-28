<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="acme23";
$port=3306;

$connection=new mysqli($hostname,$username,$password,$dbname,$port);

echo "Connection created"

?>