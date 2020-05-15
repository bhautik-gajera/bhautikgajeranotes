<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bhautik Gajera | Home</title>

     <?php
     include 'user/include/link.php';
     ?>

</head>

<body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">Bhautik Gajera</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                         <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
               </li>
               <li class="nav-item dropdown"> -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Subjects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="wt.php">Web Technology</a>
                         <a class="dropdown-item" href="se.php">Software Engineering</a>
                         <a class="dropdown-item" href="aj.php">Advance Java</a>
                         <a class="dropdown-item" href="dotnet.php">.Net</a>
                    </div>
                    </li>

               </ul>
               <!-- <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
          </div>
     </nav>


     <div class="container mt-2">
          <div class="row">
               <div class="col-lg-3 col-sm-12">
                    <div class="card mt-2 animated swing" style="width: 100%;">
                         <img class="card-img-top" src="user/images/1.png" alt="Card image cap">
                         <div class="card-body">
                              <h5 class="card-title">Web Technology</h5>

                              <a href="user/wt.php" class="btn btn-primary">Click here for More</a>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                    <div class="card mt-2 animated swing" style="width: 100%;">
                         <img class="card-img-top" src="user/images/2.png" alt="Card image cap">
                         <div class="card-body">
                              <h5 class="card-title">Software Engineering</h5>

                              <a href="user/se.php" class="btn btn-primary">Click here for More</a>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                    <div class="card mt-2 animated swing" style="width: 100%;">
                         <img class="card-img-top" src="user/images/3.png" alt="Card image cap">
                         <div class="card-body">
                              <h5 class="card-title">Advance Java</h5>

                              <a href="user/aj.php" class="btn btn-primary disabled">Coming Soon</a>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                    <div class="card mt-2 mb-5 animated swing" style="width: 100%;">
                         <img class="card-img-top" src="user/images/4.png" alt="Card image cap">
                         <div class="card-body">
                              <h5 class="card-title">Dot Net</h5>

                              <a href="user/dotnet.php" class="btn btn-primary">Click here for More</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>









     <script src="user/https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="user/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="user/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>