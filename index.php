<?php
include "connection.php";
$sql="SELECT*FROM quiz";
$result=mysqli_query($connect,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js" ></script>


</head>
<body>
<div class="container mt-5">
    <div class="text-right">
     <a href="add.php" class="btn btn-primary mb-2">Add </a>
     <a href="show.php" class="btn btn-primary mb-2 text-right1">User</a>
 </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Answer</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
        $i++;
        ?>
        <div class="Wrapper">

            <tr class="Wrapper__1">
                <th scope="row"><?php echo $i?></th>
                <td class="Question"><?php echo $row['savol']?></td>
                <td class="Answer"><?php echo $row['javob']?></td>
                <div class="btns">
                    <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a></td>
                </div>
            </tr>
        </div>
<?php }?>
        </tbody>
    </table>
</div>
<script src="show.js"></script>
</body>
</html>