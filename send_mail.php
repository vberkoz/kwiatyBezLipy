<?php
header("Location: kontakt.php");

if (isset($_POST["first"])) $name = $_POST['first'];
if (isset($_POST["last"])) $phone = $_POST['last'];
if (isset($_POST["email"])) $mail = $_POST['email'];
if (isset($_POST["message"])) $message = $_POST['message'];

$subject = $name;
$message = "Imię: " ."\r\n" . $name."\r\n".
           "Nazwisko: " ."\r\n" . $phone."\r\n".
           "E-mail: " ."\r\n" . $message."\r\n".
           "Kwiatowy budżet i potrzeby: " ."\r\n" . $mail;
$headers .= "MIME-Version: 1.0"."\r\n" ."Content-Type:text/html;charset=utf-8". "\r\n";

mail('vberkoz@gmail.com', $subject, $message, $headers);
mail('pracowniathelas@gmail.com', $subject, $message, $headers);
?>
