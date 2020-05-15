<?php
include('../include/header.php');

if (isset($_SESSION['username'])) {

    if (isset($_POST['upload'])) {

        $number = $_POST['number'];
        $number = mysqli_real_escape_string($conn, $number);
        $number = htmlentities($number);

        $aim = $_POST['aim'];
        $aim = mysqli_real_escape_string($conn, $aim);
        $aim = htmlentities($aim);

        $image = $_FILES['image'];
        $img_name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_size = $_FILES['image']['size'];

        $link = $_POST['link'];
        $link = mysqli_real_escape_string($conn, $link);
        $link = htmlentities($link);
        //print_r($image);

        if ($type == "image/jpeg" || $type == "image/png" || $type == "image/jpg") {
            if ($img_size <= 2097152) {
                move_uploaded_file($tmp_name, "../images/" . $img_name);
                $sql = "insert into se (number,aim,image,link) value('$number','$aim','$img_name','$link')";
                $res = mysqli_query($conn, $sql);
                if ($res) {
                    $_SESSION['message'] = "<div> Post is Published</div>";
                    header("Location: index.php");
                } else {
                    $_SESSION['message'] = "<div> Sorry,Something went wrong.</div>";
                    header("Location: index.php");
                }
            } else {
                $_SESSION['message'] = "<div> Sorry, Image size exceded 2mb.</div>";
                header("Location: index.php");
            }
        } else {
            $_SESSION['message'] = "<div> Sorry, Image format is not supported.</div>";
            header("Location: index.php");
        }

        // Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet nobis delectus 
    }
} else {
    $_SESSION['message'] = "<div class='text-danger'>Login To Continue</div>";
    header("Location: ../index.php");
}
?>