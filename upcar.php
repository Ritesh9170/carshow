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
    ?>
    <form  method="post" action="uploadcar.php" enctype="multipart/form-data">
     
     <div class="row mb-3">
     <h2 class="mt-3 ">latest car update </h2>
      
       <label for="inputName" class="col-sm-2 col-form-label">Carname</label>
       <div class="col-sm-5">
         <input type="text" class="form-control" name="upcarname">
       </div>
     </div>

     <div class="row mb-3">
       <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
       <div class="col-sm-5">
         <input type="text" class="form-control" name="price">
       </div>
     </div>

     <div class="row mb-3">
       <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
       <div class="col-sm-5">
         <input type="date" class="form-control" name="date">
       </div>
     </div>

     <div class="row mb-3">
       <label for="inputImage" class="col-sm-2 col-form-label">Latest carimage Image</label>
       <div class="col-sm-5">
         <input type="file" class="form-control" name="upcarimg">
       </div>
     </div>
    
    
       <div class="btn">
     <input type="submit" name="submit" class="btn btn-success" value="upload"/>
     </div>
     </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>