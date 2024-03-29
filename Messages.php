<?php
if(!isset($_GET['status'])){
    header("Location: https://vikassoni.000webhostapp.com/login.html");
die();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>Vikas Soni | All Message</title>
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script>
    $(document).ready(function(){
    //   var tid = setInterval(show, 1000);
        // function show(){
            $.post('message.php',{},function(Data){
            $('#display').html(Data);
        })
// }
    })
  
    </script>
  
    
  

</head>
<body>
    <div id="display" class="mx-auto w-100 row row-cols-lg-3 row-cols-sm-auto row-cols-md-auto  d-sm-flex d-lg-flex  flex-column-reverse "></div>
</body>
</html>