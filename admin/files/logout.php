<?php
include "../include/header.php";

if (isset($_SESSION['username'])) {

    session_unset($_SESSION['username']);

    $_SESSION['message'] = "<div class='chip green white-text'>You have been successfully Logged Out.</div>";

    header("Location: ../index.php");
} else {
    $_SESSION['message'] = "<div class='text-danger'>Login To Continue</div>";
    header("Location: ../index.php");
}
?>