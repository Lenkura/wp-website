<?php

$firstname = '';
$nameError = '';
$emailError = '';
$mobileError = '';
$subjectError = '';
$messageError = '';
if (!empty($_POST)){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$errorsfound = false;
if (!isset($_POST["name"])) {
  $nameError = "Name cannot be blank";
  $errorsFound = true;
}

if(!preg_match("/^[-a-zA-Z ,.']+$/",$_POST["name"])){
  $nameError = "Name contains unacceptable characters";
  $errorsFound = true;
}

if (!isset($_POST["email"])) {
  $emailErrorB = "Email cannot be blank";
  $errorsFound = true;
} else
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  $emailError = "Incorrect email format";
  $errorsFound = true;
  $cleanEmail=filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  //Present adjusted email to user
}

if (!isset($_POST["mobile"])) {
  $mobileError = "Mobile cannot be blank";
  $errorsFound = true;
}else
if(!preg_match("/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/",$_POST["mobile"]){
  $mobileError = "Non Australian number entered";
  $errorsFound = true;
}

if (!isset($_POST["subject"])) {
  $subjectError = "Subject cannot be blank";
  $errorsFound = true;
} else
$cleansubject = htmlentities($_POST["subject"]);

if (!isset($_POST["message"])) {
  $messageError = "Message cannot be blank";
  $errorsFound = true;
} else
$cleanmessage = htmlentities($_POST["message"]);

//Present errors to user


if ($errorsFound){
  $message = "There are errors in your form, please try again";

  // Present to user
}
}
$post = print_r($_POST, true);
echo "<h3>\$_POST contains:</h3>
<pre>
  $post
</pre>";
?>