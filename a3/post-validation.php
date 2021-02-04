<?php

$firstname = '';
$firstnameError = '';

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
  $nameError = "Email cannot be blank";
  $errorsFound = true;
}

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  $nameError = "Incorrect email format";
  $errorsFound = true;
}

if (!isset($_POST["mobile"])) {
  $nameError = "Mobile cannot be blank";
  $errorsFound = true;
}
if(!preg_match("/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/",$_POST["mobile"]){
  $nameError = "Non Australian number entered";
  $errorsFound = true;
}

if (!isset($_POST["subject"])) {
  $nameError = "Subject cannot be blank";
  $errorsFound = true;
}

if (!isset($_POST["message"])) {
  $nameError = "Message cannot be blank";
  $errorsFound = true;
}




if (!$errorsFound)
  $message = "Here are your results ...";
else
  $message = "There are errors in your form";
}

$post = print_r($_POST, true);
echo "<h3>\$_POST contains:</h3>
<pre>
  $post
</pre>";
?>