<?php
echo "<pre>"
print_r($_POST)
echo "</pre>"



$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['name'];


$to ="izzathasan01@gmail.com"
$body ="";

$body .="FROM: ".$userName. "\r\n";
$body .="email: ".$userEmail. "\r\n";
$body .="Message: ".$message. "\r\n";

mail($to,$messageSubject,$body);

?>
