<?php
include('../include/header.php');
if (isset($_SESSION['username'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>

        <?php
        include('../include/link.php');
        ?>
    </head>

    <body>

        <?php
        include('../include/navbar.php');
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                    <div class="card-deck mt-2" style="width: 100%;">
                        <img class="card-img-top" src="../images/1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Web Technology</h5>
                            <a href="wt.php" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                    <div class="card-deck mt-2" style="width: 100%;">
                        <img class="card-img-top" src="../images/2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Software Engineering</h5>
                            <a href="se.php" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                    <div class="card-deck mt-2" style="width: 100%;">
                        <img class="card-img-top" src="../images/3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Advance Java</h5>
                            <a href="aj.php" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                    <div class="card-deck mt-2" style="width: 100%;">
                        <img class="card-img-top" src="../images/4.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dot Net</h5>
                            <a href="dotnet.php" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include('../include/script.php');
        ?>
    </body>

    </html>
<?php
} else {
    $_SESSION['message'] = "<div class='text-danger'>Login To Continue</div>";
    header("Location: ../index.php");
}
?>