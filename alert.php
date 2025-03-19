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
    <?php  include_once("header.php");
        $query ="select * from register";
        $run = mysqli_query($con,$query);
        $rowcount = mysqli_num_rows($run);
      if($rowcount>0){
       while($row = mysqli_fetch_assoc($run)){
           $email = $row['email'];
           $name = $row['name'];
       ?>
       <?php 
       }
    }
        ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6 col-12">
        <?php 
           $id =  base64_decode(base64_decode(base64_decode($_GET['show'])));
            $sql = "select * from upcar where id ='$id'";
            $run = mysqli_query($con,$sql);
            $rowcount = mysqli_num_rows($run);
            if($rowcount>0)
            {
                $row = mysqli_fetch_assoc($run);
               $upcarname = $row['upcarname'];
               $upcarimg = $row['upcarimg'];
            }
         ?>
        <div class="latestcar">
            <img src="<?php echo $upcarimg ?>" alt="" width = "100%">
            <h1 class="text-center"><?php echo $upcarname ?></h1>
        </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-12">
            <div class="latbox">
                <div class="alertbox1">
                <h5 class="text-center pt-4"><i class="fa-solid fa-circle-check fs-1" style="color: #298021d0; width: 40px"></i> Hi <?php echo $name ?>, Thanks for your interest in <?php echo $upcarname ?></h5><br>
                <p class="text-center ps-2">We will contact you as soon as this car is launched</p>
                </div>
                <div class="alertbox2 my-2">
                    <h5>People who viewed <?php echo $upcarname?> also viewed these cars</h5>
                    
                </div>
            </div>
        </div>
    </div>
   
</div>
<?php 
    include_once("footer.php")
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>