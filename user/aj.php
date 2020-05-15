<?php
include('include/connect.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bhautik Gajera | Advance Java</title>
     <?php
     include 'include/link.php';
     ?>
</head>

<body>
     <!-- NAVIGATION BAR STARTS -->
     <?php
     include('include/navbar.php');
     ?>
     <!-- NAVIGATION BAR ENDS -->
     <div class="container mt-2">
          <div class="text-center mb-5">
               <img class="img-fluid" src="images/3.0.png" alt="">
          </div>



          <div class="row">
               <?php
               $sql = "select * from aj order by number ";
               $res = mysqli_query($conn, $sql);
               if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
               ?>
                         <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                              <div class="card-deck mt-2" style="width: 100%;">
                                   <img class="card-img-top" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
                                   <div class="card-body">
                                        <h5 class="card-title">Practical <?php echo $row['number']; ?></h5>
                                        <!-- <p class="card-text">Aim : <?php echo $row['aim'] ?></p> -->
                                        <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">Download</a>
                                   </div>
                              </div>
                         </div>
                         <?php
                    }
               }
?>
          </div>

     </div>







     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>