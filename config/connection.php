<?php 
$con = mysqli_connect("localhost","root","","cars");
if($con){
    // echo "connect to db";
}else{
    echo "not connect to db";
}
?>