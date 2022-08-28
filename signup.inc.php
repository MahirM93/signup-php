<?php
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $username=$_POST["username"];
  $pwd=$_POST["pwd"];
  $pwdRepeat=$_POST["pwdRepeat"];
  require_once'dbh.inc.php';
  require_once'function.inc.php';
  if(emtyInputSignup($name,$email,$username,$pwd,$pwdRepeat)!==false){
    header("location:../signup.php?error=emptyinput");
    exit();

  }
  if(incalidUid($username)!==false){
    header("location:../signup.php?error=emptyinput");
  }
  exit();
}
if (invalidemail($email)!==false){
  header("location:../signup.php?errorinput");
}
exit();
if (pwdMatch($pwd,$pwdRepeat)!==false);{
  header("location:../signup.php?errorinput");
  exit();
  if(uidExits($conn,$username)!==false){
    header("location:../signup.php?errorinput");
    exit();
  }
}


 ?>
