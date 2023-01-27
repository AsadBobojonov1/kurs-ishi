<?php
include "connection.php";
$savol=mysqli_real_escape_string($connect,$_POST['savol']);
$javob=mysqli_real_escape_string($connect,$_POST['javob']);
$sql="INSERT INTO `quiz`(`savol`,`javob`) values ('$savol','$javob')";
$result=mysqli_query($connect,$sql) or die("hatoli");
if($result){
header('Location:index.php');
}else {
    echo 'Hatolik yuz berdi';
}