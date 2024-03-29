<?php

$firstname = '';
$nameError = '';
$emailError = '';
$mobileError = '';
$subjectError = '';
$messageError = '';
$errorsfound = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST)) {
    if (!isset($_POST["name"])) {
      $nameError = '<span></span><span style="color:red; font-size:15px;">Name cannot be blank</span><span></span>';
      $errorsFound = true;
    }
    if (!preg_match("/^[-a-zA-Z ,.']+$/", $_POST["name"])) {
      $nameError = '<span></span><span style="color:red; font-size:15px;">Name contains unacceptable characters. Letters and "-,.\'" only</span><span></span>';
      $errorsFound = true;
      $returnname = $_POST["name"];
    }

    if (!isset($_POST["email"])) {
      $emailError = '<span></span><span style="color:red; font-size:15px;">Email cannot be blank</span><span></span>';
      $errorsFound = true;
    } else
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailError = '<span></span><span style="color:red; font-size:15px;">Incorrect email format, did you mean to enter this?</span><span></span>';
      $errorsFound = true;
    }
    if ($errorsFound == true) {
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
    if ($errorsFound == true) {
      $returnmobile = $_POST["mobile"];
    }


    if (!isset($_POST["subject"])) {
      $subjectError = '<span></span><span style="color:red; font-size:15px;">Subject cannot be blank</span><span></span>';
      $errorsFound = true;
    } else if ($errorsFound == true) {
      $returnsubject = $_POST["subject"];
    }

    if (!isset($_POST["message"])) {
      $messageError = '<span></span><span style="color:red; font-size:15px;">Message cannot be blank</span><span></span>';
      $errorsFound = true;
    } else if ($errorsFound == true) {
      $returnmessage = $_POST["message"];
    }



    if ($errorsFound) {
      $message = '<span style="color:red; font-size:20px;">There are errors in your form, please try again</span>';
    } else {
      $filename = "mail.txt";
      $_POST["subject"] = htmlentities($_POST["subject"]);
      $_POST["message"] = htmlentities($_POST["message"]);
      if (($fp = fopen($filename, "a")) && flock($fp, LOCK_EX) !== false) {
        fputcsv($fp, $_POST);
        flock($fp, LOCK_UN);
        fclose($fp);
      }
      $message = '<span style="font-size:20px; font-weight:bold;">  Message Recieved. Thanks for getting in touch.</span>';
    }
  }
}
