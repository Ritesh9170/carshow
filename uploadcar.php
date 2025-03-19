<?php 
include_once('config/connection.php');

if(isset($_POST['submit'])){
    $upcarname = $_POST['upcarname'];
    $price = $_POST['price'];
    $date = $_POST['date'];

    $folder = "upload/";
    $image_file = $_FILES['upcarimg']['name'];
    $file = $_FILES['upcarimg']['tmp_name'];
    $target_file = $folder.basename($image_file);
    $path = $folder.$image_file;

    if($file!=""){
        move_uploaded_file($file,$target_file);
    }

    $query = "insert into upcar(upcarname,price,date,upcarimg) values('{$upcarname}','{$price}','{$date}','{$target_file}')";
    $run = mysqli_query($con,$query);
    if($run){
        header('location:upcar.php');
    }else{
        echo "please try again";
    }
}
?>