<?php
include('include/header.php');

if (isset($_SESSION['username'])) {

    if (isset($_POST['signup'])) {

        $email = $_POST['email'];
        $email = mysqli_real_escape_string($conn, $email);
        $email = htmlentities($email);

        // print_r($email);
        // echo "<br>";

        $username = $_POST['username'];
        $username = mysqli_real_escape_string($conn, $username);
        $username = htmlentities($username);

        // print_r($username);
        // echo "<br>";

        $password = $_POST['password'];
        $password = mysqli_real_escape_string($conn, $password);
        $password = htmlentities($password);
        $password = password_hash($password, PASSWORD_BCRYPT);

        // print_r($password);
        // echo "<br>";

        $sql1 = "select * from admin where email='$email' or username='$username'";
        $res1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($res1) > 0) {
            header("Location: login.php");
            $_SESSION['message'] = "<div class='text-danger'>Account Already Exists,Please Login to Continue</div>";
        } else {
            $sql = "insert into admin(email,username,password) values('$email','$username','$password')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                header("Location: signup.php");
                $_SESSION['message'] = "<div class='text-success'>You Have been Successfully Registered, Login To Continue</div>";
            } else {
                header("Location: signup.php");
                $_SESSION['message'] = "<div class='text-danger'>Sorry Something Went Wrong,Please Signup Again</div>";
            }
        }
    }
} else {
    $_SESSION['message'] = "<div class='text-danger'>Login To Continue</div>";
    header("Location: login.php");
}


?>

<!--  -->