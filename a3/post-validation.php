<?php

$firstname = '';
$nameError = '';
$emailError = '';
$mobileError = '';
$subjectError = '';
$messageError = '';
$errorsfound = false;

if (!empty($_POST)) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["name"])) {
      $nameError = '<span></span><span style="color:red; font-size:15px;">Name cannot be blank</span><span></span>';
      $errorsFound = true;
    }


    if (!preg_match("/^[-a-zA-Z ,.']+$/", $_POST["name"])) {
      $nameError = '<span></span><span style="color:red; font-size:15px;">Name contains unacceptable characters</span><span></span>';
      $errorsFound = true;
    }
    
    if (!isset($_POST["email"])) {
      $emailError = '<span></span><span style="color:red; font-size:15px;">Email cannot be blank</span><span></span>';
      $errorsFound = true;
    } else
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailError = '<span></span><span style="color:red; font-size:15px;">Incorrect email format, Did you mean to enter this?</span><span></span>';
      $errorsFound = true;
      $cleanEmail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    }

    if (!isset($_POST["mobile"])) {
      $mobileError = '<span></span><span style="color:red; font-size:15px;">Mobile cannot be blank</span><span></span>';
      $errorsFound = true;
    } else
  if (!preg_match("/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/", $_POST["mobile"])) {
      $mobileError = '<span></span><span style="color:red; font-size:15px;">Non Australian number entered</span><span></span>';
      $errorsFound = true;
    }

    if (!isset($_POST["subject"])) {
      $subjectError = '<span></span><span style="color:red; font-size:15px;">Subject cannot be blank</span><span></span>';
      $errorsFound = true;
    } else
      $cleansubject = htmlentities($_POST["subject"]);

    if (!isset($_POST["message"])) {
      $messageError = '<span></span><span style="color:red; font-size:15px;">Message cannot be blank</span><span></span>';
      $errorsFound = true;
    } else
      $cleanmessage = htmlentities($_POST["message"]);

    //Present errors to user


    if ($errorsFound) {
      $message = '<span style="color:red; font-size:20px;">There are errors in your form, please try again</span>';

      // Present to user
    }
  }
}
// $post = print_r($_POST, true);
// echo "<h3>\$_POST contains:</h3>
// <pre>
//   $post
// </pre>";
