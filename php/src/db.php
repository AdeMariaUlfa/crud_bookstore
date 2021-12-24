<?php

function Createdb(){
    $servername = "172.20.0.2";
    $username = "root";
    $password = "admin";
    $dbname = "crud_bookstore";

    // create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
?>
