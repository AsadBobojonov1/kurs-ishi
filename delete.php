<?php
include "connection.php";
$id=$_GET['id'];
$sql="DELETe FROM quiz where id='{$id}'";
$result=mysqli_query($connect,$sql);
if($result){
    header('Location:index.php');
}else {
    echo 'Hatolik yuz berdi';
}