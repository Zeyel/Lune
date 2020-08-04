<?php
  /* CONNECTION TO THE DATABASE
  *
  */

  // Default values for phpMyAdmin
$db_host = "localhost";
$db_name = "lune";
$db_user = "root";
$db_pass = "";

  // Trying to connect with the values above
try{
    $bdd = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>
