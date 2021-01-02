<?php

$con = mysqli_connect('localhost','root');

if ($con) {
  echo " Connection successful ";
}else{
echo " No Connection ";
}

mysqli_select_db($con, 'nike' );

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$pswd = $_POST['pswd'];
$cpswd = $_POST['cpswd'];


$query = " insert into register (fname, lname, mail, pswd, cpswd) 
values ('$fname', '$lname', '$mail', '$pswd', '$cpswd') ";

echo "$query";

mysqli_query($con, $query);

header('location:login.php')

?>