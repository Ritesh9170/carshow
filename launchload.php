<?php 
include_once('config/connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];

    $folder = "upload/";
    $image_file = $_FILES['carimg']['name'];
    $file = $_FILES['carimg']['tmp_name'];
    $target_file = $folder.basename($image_file);
    $path = $folder.$image_file;

    if($file!=""){
        move_uploaded_file($file,$target_file);
    }

    $query = "insert into launchcar(name,price,carimg) values('{$name}','{$price}','{$target_file}')";
    $run = mysqli_query($con,$query);
    if($run){
        header('location:launchup.php');
    }else{
        echo "please try again";
    }
}
?>