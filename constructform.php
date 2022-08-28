<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$subject=$_POST['subject'];
$mailFrom=$_POST['mail'];
$mesage=$_POST['mesage'];

$mailTo="mesanovicmahir@gmail.com";
$header="From:".$mailFrom;
$text="Zaprimio si email".$name.".\n\n".$mesage;
mail($mailTo,$subject,$text,$headers);
header("Location:index.php?mailsend");

}

?>
