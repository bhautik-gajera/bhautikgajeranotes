<?php
include('include/header.php');

  if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $username = mysqli_real_escape_string($conn, $username);
    $username = htmlentities($username);
    // echo "$username<br>";

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($conn, $password);
    $password = htmlentities($password);
    // echo "$password<br>";

    $sql = "select password from admin where username='$username'";
    $res = mysqli_query($conn, $sql);
    // echo "<pre>";
    // print_r($res);
    // echo "</pre>";
    // echo "<br>";

    $row = mysqli_fetch_assoc($res);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    // echo "<br>";
    $pass = $row['password'];
    // echo "<pre>";
    // print_r($pass);
    // echo "</pre>";
    // echo "<br>";

    $var = strcmp($pass,$password);
    echo $var;

    if ($var == 0) {
      $_SESSION['username'] = $username;
      header("Location: files/index.php");
    } 
    else {
      $_SESSION['message'] = "<div class='text-danger'> Sorry, Credential don't match</div>";
      header("Location: index.php");
    }
  }
