<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>carshow</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php 
    include_once("config/connection.php");
    include_once("header.php");
    ?>

    <div class="container">
      <div class="upcardetail">
        <h2>Electric Car Launches</h2>
        <p>
          Stay updated with new car launches, comprehensive car reviews, latest
          car news, expert advice and much more on our website. The list of new
          car launches in 2025 includes BMW 3 Series LWB (Rs. 72.42 Lakh) and
          Audi RS Q8 (Rs. 2.87 Crore). Get latest information about 69 new cars
          launches in the last six months. Kia Syros (Rs. 10.22 Lakh) is the
          most popular new car launched in India.
        </p>
      </div>
    </div>
    <section>
      <div class="cut">
        <img src="img/utube.jpeg" alt="" />
      </div>
    </section>
    <div class="container pt-4">
      <h3 class="py-2">Electric Cars 2025</h3>
      <div class="row">
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
        <div class="col-xs-12 col-md-6 col-lg-4 col-12 pb-4">
          <div class="card" style="width: 19rem">
            <img
              src="<?php echo $carimg ?>"
              width="100"
              class="card-img"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $carname ?></h5>
              <p class="carprice pb-4">₹<?php echo $price ?></p>
              <button class="card-btn fw-semibold">View March Offers</button>
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
</div>
    <?php 
    include_once("footer.php");
    ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script
    src="https://kit.fontawesome.com/0e55dc6a03.js"
    crossorigin="anonymous"
  ></script>
  <script src="script.js"></script>
</html>
