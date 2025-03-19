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
    include_once("header.php");
    ?>
    <div class="container-fluid p-0">
        <div class="banner">
            <h1 class="fw-bold">Buy now or wait for your right car?</h1>
        </div>
    </div>
    <div class="container">
        <div class="upcardetail">
            <h2>Upcoming Cars in India</h2>
            <p>Around 73 upcoming cars will be launched in India in 2025. Among these 73 upcoming cars, there are 50 SUVs (Tata Avinya, Tata Sierra), 3 Convertibles (MG Cyberster, Volkswagen Golf GTI), 4 MUVs (Renault Triber 2025, MG M9), 7 Sedans (Audi A5, Skoda Octavia RS), 5 Hatchbacks (Tata Tiago 2025, Maruti Baleno 2025), 1 Pickup Truck (Mahindra Global Pik Up) and 3 Coupes (Aston Martin Vanquish, BMW 2 Series 2025). Of the above, 17 cars are expected to launch in the next three months. Also find out the latest car launches in India with price list.</p>
        </div>
    </div>
    <div class="container pt-4">
        <h3 class="py-2">Upcoming Cars 2025</h3>
        <div class="row">
        <?php
    $query ="select * from upcar";
    $run = mysqli_query($con,$query);
    $rowcount = mysqli_num_rows($run);
    if($rowcount>0){ while($row = mysqli_fetch_assoc($run)){ $id = $row['id'];
        $upcarname = $row['upcarname']; 
        $price = $row['price'];
         $date = $row['date']; 
         $upcarimg = $row['upcarimg'];
         ?>
            <div class="col-xs-12 col-md-6 col-lg-4 col-12 pb-4">
            <div class="card" style="width: 19rem;">
                 <img src="<?php echo $upcarimg ?>" width="100" class="card-img" alt="...">
                 <div class="card-body">
                   <h5 class="card-title"><?php echo $upcarname ?></h5>
                   <p class="carprice">₹<?php echo $price ?><span class="expected">Estimated</span></p>
                   <p class="cardate">Mar <?php echo $date ?><span class="expected">:Expected Launched</span></p>
                   <a href="alert.php?show=<?php echo $row['id'];?>" class="btn card-btn fw-semibold">Alert Me When Launched</a>
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
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>