<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo="my3kids70@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt ="you have received an e-mail from ".$name.".\n\n".$message;
  mail($mailTo,$subject,$txt,$headers);



}
?>
