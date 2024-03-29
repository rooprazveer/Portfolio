<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

$con=mysqli_connect('localhost','id18729626_vikassoni','myhome@678Bhilai','id18729626_vikas');
$name=$_POST['Name'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];
$email=$_POST['Email'];
date_default_timezone_set("Asia/Calcutta");
$d=date('h:i:s a d/m/Y');
if($_POST['Name']!="" && $_POST['Message']!="" && $_POST['Email']!=""){
    $q="INSERT into contact SET Name='$name', Subject='$subject' , Message='$message' , Email='$email', Date_Time='$d'";
    $ch=mysqli_query($con,$q);
    echo"Message Sent!";
}

else{
    echo"Message not Sent";
}



?>