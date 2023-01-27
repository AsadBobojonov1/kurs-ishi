<?php
include "connection.php";
$id=$_GET['id'];
$sql="SELECT *FROM quiz where id='{$id}'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <div class="form-group">
                    <label for="savol" class='form__label'>Question</label>
                    <input type="text" placeholder="Enter a question..." class="form-control" id="savol" name="savol" required value="<?php echo $row['savol']?>">
                </div>
                <div class="form-group">
                    <label for="javob">Answer</label>
                    <textarea type="text" class="form-control1" id="javob" name="javob"  required  cols="30" rows="10"><?php echo $row['javob']?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html> 