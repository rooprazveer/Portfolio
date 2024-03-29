<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$con=mysqli_connect('localhost','id18729626_vikassoni','myhome@678Bhilai','id18729626_vikas');
// $con=mysqli_connect('localhost','root','','contacts');
$q="select * from contact";
$ch=mysqli_query($con,$q);
while($row=mysqli_fetch_array($ch))
   {


echo"
<div class='col vw-100 '>
<div class=' card p-2 m-3 shadow-lg'>
  <div class='card-body'>
    <h5 class='card-title'>Name - $row[Name]</h5>
    <h6 class='card-subtitle mb-2 text-body-secondary'>Subject - $row[Subject]</h6>
    <h6 class='card-subtitle mb-2 text-body-secondary'>Email - $row[Email]</h6>
    <p class='card-text'>Mesage - $row[Message]</p>
    <h6 class='card-subtitle mb-2 text-body-secondary'>Time - $row[Date_Time]</h6>
    
  </div>
</div>
</div>



";
   }
?>