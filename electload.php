<?php 
include_once('config/connection.php');

if(isset($_POST['submit'])){
    $carname = $_POST['carname'];
    $price = $_POST['price'];
    $date = $_POST['date'];

    $folder = "upload/";
    $image_file = $_FILES['carimg']['name'];
    $file = $_FILES['carimg']['tmp_name'];
    $target_file = $folder.basename($image_file);
    $path = $folder.$image_file;

    if($file!=""){
        move_uploaded_file($file,$target_file);
    }

    $query = "insert into electriccar(carname,price,date,carimg) values('{$carname}','{$price}','{$date}','{$target_file}')";
    $run = mysqli_query($con,$query);
    if($run){
        header('location:upcar.php');
    }else{
        echo "please try again";
    }
}
?>