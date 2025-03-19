
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

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
    
        $folder = "upload/";
        $image_file = $_FILES['profile_image']['name'];
        $file = $_FILES['profile_image']['tmp_name'];
        $target_file = $folder.basename($image_file);
        $path = $folder.$image_file;
    
        if($file!=""){
            move_uploaded_file($file,$target_file);
        }
    
        $query = "insert into register(name,email,mobile,password,profile_image) values('{$name}','{$email}','{$mobile}','{$password}','{$target_file}')";
        $run = mysqli_query($con,$query);
        if($run){
            header('location:index.php');
        }else{
            echo "please try again";
        }
    }
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>