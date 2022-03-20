<?php
$mysql_hostname = "localhost"; //host name
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "website"; // tên database
$prefix = "";
$con = mysqli_connect("localhost","root","","website");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>