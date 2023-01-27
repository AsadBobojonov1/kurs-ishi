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
    <link rel="stylesheet" href="./show1.css">
</head>
<body>
    <div class="faq-header">FAQs</div>
<div class="container mt-5">
    <div class="row">
        <?php $i=-1;  while ($row=mysqli_fetch_assoc($result)){
             $i++;
             ?>
            <ul id="Mylist_<?php echo $row['id']?>" class="Wrapper__1">
                <div class="question__wrapper">
                    <li class='questions' id="question_<?php echo $row['id']?>">  <?php echo $row['savol']?>  </li>
                    <button type="button"  onclick="open_down_list(<?php echo $i?>)">
                        <img class="custom" src="./down-arrow-svgrepo-com.svg"  >
                    </button>
                </div>
                <div class="answer__wrapper">
                    <li draggable="true" class='answers' id="answers_<?php echo $row['id']?>">  <?php echo $row['javob']?>  </li>
                </div>
            </ul>
<?php }?>
    </div>
</div>

<script src="show.js"></script>
</body>
</html>
