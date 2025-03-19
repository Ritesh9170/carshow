<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carshow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    session_start();
    include_once("config/connection.php");
    $query ="select * from register";
    $run = mysqli_query($con,$query);
    $rowcount = mysqli_num_rows($run);
  if($rowcount>0){
   $Sno = 1;
   while($row = mysqli_fetch_assoc($run)){
       $id = $row['id'];
       $email = $row['email'];
       $profile_image = $row['profile_image'];
   ?>
   <?php 
      $Sno++;
   }
}
    ?>
<header>
        <div class="container-fluid hd2">
            <div class="row py-1 hd1">
                <div class="col-xs-12 col-md-4 col-lg-4 col-12">
                    <div class="logo">
                    <img src="./img/logo.png" alt="" width="160px;" class="ms-4 logo">
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 col-12">
                    <div class="searchBox mt-3">
                        <input type="text" placeholder="Search or Ask a Question">
                        <a href="">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 col-12">
                    <div class="text-center pt-2 social ps-5">
                        <button class="fs-5" style="border: none;background: transparent;"><i class="fa-regular fa-user"></i></button>
                        <button class="btn">
                        <a href="logout.php" class="btn fs-4 fw-semibold">Logout</a>
                        </button>
                        <div class="profileimg">
                            <img src="<?php echo $profile_image; ?>" width="59px" class="rounded-circle"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
            <div class="container-fluid py-2">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa-solid fa-sliders"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          NEW CARS
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="index.php">Find New Cars</a></li>
                          <li><a class="dropdown-item" href="upcoming.php">Upcoming Cars</a></li>
                          <li><a class="dropdown-item" href="#">New Car Loan</a></li>
                          <li><a class="dropdown-item" href="launches.php">New Launches</a></li>
                          <li><a class="dropdown-item" href="electric.php">Electric Cars</a></li>
                          <li><a class="dropdown-item" href="#">Images</a></li>
                          <li><a class="dropdown-item" href="#">New Car Offers</a></li>
                          <li><a class="dropdown-item" href="#">Popular Cars</a></li>
                          <li><a class="dropdown-item" href="#">Popular Brands</a></li>
                        </ul>
                    </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          USED CARS
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Explore Used Cars</a></li>
                          <li><a class="dropdown-item" href="#">Carshow abSure</a></li>
                          <li><a class="dropdown-item" href="#">Check Car Valuation</a></li>
                          <li><a class="dropdown-item" href="#">Sell Your Car</a></li>
                          <li><a class="dropdown-item" href="#">Used Car Loan</a></li>
                          <li><a class="dropdown-item" href="#">Find Dealers</a></li>
                          <li><a class="dropdown-item" href="#">Popular Cities</a></li>

                        </ul>
                    </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      NEWS & REVIEWS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">Expert Reviews</a></li>
                        <li><a class="dropdown-item" href="#">User Reviews</a></li>
                        <li><a class="dropdown-item" href="#">Special Reports</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>