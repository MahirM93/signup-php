<?php
//  Server konekcija//
$serverName="localhost";
$dBUsername="root";
$dBPasswor="";
$dBName="imebaze";
$conn=mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);
if(!$conn){
  die("Povezivanje nije uspjelo".mysqli_conection_error());
}


 ?>
