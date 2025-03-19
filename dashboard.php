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
    include_once("config/connection.php");
    include_once("header.php");
    ?>
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 100vh;">
                <img src="img/slide1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" style="height: 100vh;">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" style="height: 100vh;">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section>
        <div class="container-fluid py-0">
            <div class="carbox">
                <h2>Upcoming cars</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <?php
    $query ="select * from upcar";
    $run = mysqli_query($con,$query);
    $rowcount = mysqli_num_rows($run);
    if($rowcount>0){ while($row = mysqli_fetch_assoc($run)){ 
        $id = $row['id'];
        $upcarname = $row['upcarname']; 
        $price = $row['price'];
         $date = $row['date']; 
         $upcarimg = $row['upcarimg'];
         ?>
                      <div class="swiper-slide">
                      <div class="card" style="width: 19rem;">
                 <img src="<?php echo $upcarimg ?>" width="100" class="card-img" alt="...">
                 <div class="card-body">
                   <h5 class="card-title"><?php echo $upcarname ?></h5>
                   <p class="carprice">₹<?php echo $price ?> <span class="expected">Estimated</span></p>
                   <p class="cardate">Mar <?php $date ?><span class="expected">:Expected Launched</span></p>
                   <a href="alert.php?show=<?php echo base64_encode(base64_encode(base64_encode($row['id'])))?>" class="btn card-btn fw-semibold">Alert Me When Launched</a>
                 </div>
                </div>
                      </div>
                      <?php 
   }
}else{
    echo "record not found";
}
?>
                     
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
     </section>
    <section>
        <div class="container-fluid py-0">
            <div class="carbox">
                <h2>Electric cars</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <?php
    $query ="select * from electriccar";
    $run = mysqli_query($con,$query);
    $rowcount = mysqli_num_rows($run);
    if($rowcount>0){ while($row = mysqli_fetch_assoc($run)){ $id = $row['id'];
        $carname = $row['carname']; 
        $price = $row['price'];
         $date = $row['date']; 
         $carimg = $row['carimg'];
         ?>
                      <div class="swiper-slide">
                       <div class="card" style="width: 19rem;">
                        <img src="<?php echo $carimg?>" width="100" class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $carname?></h5>
                            <p class="carprice pb-4">₹ <?php echo $price ?></p>
                            <a href="caroffer.php?EVoffer=<?php echo base64_encode(base64_encode(base64_encode($row['id'])))?>" class="btn card-btn fw-semibold">View March Offers</a>
                        </div>
                        </div>
                      </div>
                      <?php 
   }
}else{
    echo "record not found";
}
?>
                      <div class="swiper-slide">
                      <div class="card" style="width: 19rem;">
                        <img src="img/evcar1.avif" width="100" class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mahindra EV2</h5>
                            <p class="carprice pb-4">₹ 15 - 18 Lakh</p>
                            <a href="caroffer.php?EVoffer=<?php echo base64_encode(base64_encode(base64_encode($row['id'])))?>" class="btn card-btn fw-semibold">View March Offers</a>
                        </div>
                        </div>
                      </div>
                     
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
     </section>
     <section>
        <div class="cut">
            <img src="img/cut1.jpeg" alt="">
        </div>
     </section>
    <section>
        <div class="container-fluid py-0">
            <div class="carbox">
                <h2>Latest cars</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <?php
    $query ="select * from launchcar";
    $run = mysqli_query($con,$query);
    $rowcount = mysqli_num_rows($run);
    if($rowcount>0){ while($row = mysqli_fetch_assoc($run)){ $id = $row['id'];
        $name = $row['name']; 
        $price = $row['price'];
         $carimg = $row['carimg'];
         ?>
                      
                      <div class="swiper-slide">
                      <div class="card" style="width: 19rem;">
                        <img src="<?php echo $carimg ?>" width="100" class="card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $name ?></h5>
                            <p class="carprice pb-4">₹ <?php echo $price ?></p>
                            <a href="latcaroffer.php?LToffer=<?php echo base64_encode(base64_encode(base64_encode($row['id'])))?>" class="btn card-btn fw-semibold">View March Offers</a>
                        </div>
                        </div>
                      </div>
                      <?php 
   }
}else{
    echo "record not found";
}
?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
     </section>
     <section>
     <div class="container pt-4">
      <div class="carBrand">
        <h4>All Brands</h4>
      </div>
      <div class="row">
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo1.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Maruti Suzuki
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo2.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Tata
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo3.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Toyata
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo4.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Mahindra
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo5.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Hyundai
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo6.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            BMW
          </p>
        </div>
      </div>
      <div class="row">
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo7.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Skoda
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo8.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Kia
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
          style="border: 1px solid black"
        >
          <img src="./img/logo9.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Mercedes-Benz
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo10.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Audi
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo11.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            Land Rover
          </p>
        </div>
        <div
          class="col-xs-6 col-md-4 col-lg-2 col-6"
          style="border: 1px solid black"
        >
          <img src="./img/logo12.jpg" alt="" width="150" />
          <p
            style="
              text-align: center;
              font-weight: bold;
              color: rgb(70, 68, 68);
            "
          >
            MG
          </p>
        </div>
        <div class="row">
        <p style="color: skyblue; text-align: center; margin-top: 5px">
          <a href="">View More Brands</a>
        </p>
      </div>
      </div>

     </section>
    <?php 
    include_once("footer.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>