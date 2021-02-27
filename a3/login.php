<?php
session_start();
if (isset($_POST["login"])) {
  if (isset($_SESSION["user"])) {
    unset($_SESSION["user"]);
  } else if (($_POST["username"] == "IanBBB") && ($_POST["pass"] == "p4ssw0rd")) {
    $_SESSION["user"]["username"] = $_POST["username"];
  } else {
    $_SESSION['message'] = "Incorrect Username or Password";
  }
  header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
  header("Location: index.php");
}
