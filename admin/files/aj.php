<?php
include('../include/header.php');
if (isset($_SESSION['username'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Advance Java</title>

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
                <div class="col-lg-6 mt-5">
                    <h3>Advance Java</h3>
                    <br>
                    <form action="ajcheck.php" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Practical Number</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>
                                    <select name="number" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Aim</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>
                                    <textarea name="aim" cols="50" rows="2" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>
                                    <input type="file" name="image" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Link</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>
                                    <textarea name="link" cols="50" rows="2"></textarea>
                                </td>
                            </tr>

                        </table>

                        <button type="submit" name="upload">Upload</button>

                    </form>
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