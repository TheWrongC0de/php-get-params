<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> ES 8 php-get-params</title>
   <?php
   /*Stampare una stringa verde se la
   variabile password passata in GET è
   uguale a "Boolean", altrimenti stampare
   una stringa rossa.*/
   $allow = "Accesso Consentito";
   $deny = "Accesso Negato";
   $psw = $_GET["password"];
   $access = ($psw === "Boolean");

   ?>
</head>
<body>

<?php
if($access){
   echo "<h1 style='color:green'>".$allow."</h1>";
} else{
   echo "<h1 style='color:red'>".$deny."</h1>";
}
?>


</body>
</html>
