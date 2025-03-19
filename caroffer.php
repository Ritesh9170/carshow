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
            $id =  base64_decode(base64_decode(base64_decode($_GET['EVoffer'])));
            $sql = "select * from electriccar where id ='$id'";
            $run = mysqli_query($con,$sql);
            $rowcount = mysqli_num_rows($run);
            if($rowcount>0)
            {
                $row = mysqli_fetch_assoc($run);
               $carname = $row['carname'];
               $carimg = $row['carimg'];
            }
         ?>
        <div class="latestcar">
            <img src="<?php echo $carimg ?>" alt="" width = "100%">
            <h1 class="text-center"><?php echo $carname ?></h1>
        </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6 col-12 offer">
            <div class="latbox">
                <div class="pt-4">
                <h3><i class="fa-regular fa-circle-xmark"style="color: #000; width: 50px"></i> <?php echo $carname ?></h3>
                <p class="ms-5 fw-medium text-secondary">Provide your contact details for Test Drive,EMI options,Offers & Exchange Benefites</p>
                </div>
                <div class="my-2">
                    <?php echo $carname?>
                    <div class="form-floating">
                    <input type="mobile" class="form-control" id="floatingPassword" name="contact">
                    <label for="floatingPassword" class="fw-medium">Contact Number*</label>
                    </div>
                    <div class="form-floating mt-4">
                    <input type="name" class="form-control" id="floatingInput" name="name">
                    <label for="floatingInput" class="fw-medium">Full Name</label>
                    </div>
                    <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                I am interested in <span class="fw-semibold"><?php echo $carname?></span>
              </label>
            </div>
            <div class="form-floating mt-4">
                    <input type="submit" class="form-control btn btn-danger fw-semibold fs-5" id="floatingInput" name="offers" value="offers">
                    </div>
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