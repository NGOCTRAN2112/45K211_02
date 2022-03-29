<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $fname = $_REQUEST['fname'];
    $email = $_REQUEST['email'];
    $MSSV = $_REQUEST['coding'];
    $Lop = $_REQUEST['class'];
    $SDT = $_REQUEST['phone'];
    $id = null;
    $link = mysqli_connect("localhost", "root", "")
    or die ("Could not connect to database");
    mysqli_select_db($link, "web");
    $sql = "insert into taikhoan values ('$id','$username', '$password', '$fname', '$email', '$MSSV', '$Lop', '$SDT')";
    $result = mysqli_query($link, $sql);

    header("Location:formdk.php");
?>