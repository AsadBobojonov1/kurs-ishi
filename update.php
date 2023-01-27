<?php
include "connection.php";
$id=$_POST['id'];
// echo $id;
$savol=mysqli_real_escape_string($connect,$_POST['savol']);
$javob=mysqli_real_escape_string($connect,$_POST['javob']);
var_dump($savol,$javob);
$sql="UPDATE quiz 
set savol='$savol' , javob='$javob'  where id='$id'";
$result=mysqli_query($connect,$sql);
if($result){
    header('Location:index.php');
}else {
    echo 'Hatolik yuz berdi';
}
