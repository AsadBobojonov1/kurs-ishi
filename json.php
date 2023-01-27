<?php 
include 'connection.php';
$sql="SELECT*FROM quiz";
$result=mysqli_query($connect,$sql);

$i=0;
$arra=[];
while($row=mysqli_fetch_assoc($result)){
//   $row=json_encode($row);
  $arra[]= json_encode($row);
  
}
print_r($arra);

?>

 
   