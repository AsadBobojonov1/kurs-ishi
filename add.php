<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<div class="container">
  <div class="row">
      <div class="col-md-6">
          <form action="create.php" method="post">
              <div class="form-group input__styled">
                  <label for="savol" class='form__label'>Question</label>
                  <input type="text" 
                    class="form-control" 
                    id="savol" 
                    name="savol" 
                    required 
                    placeholder="Enter a question...">
              </div>
             <div class="form-group ">
                  <label for="javob">Answer</label>
                 <textarea type="text" class="form-control1 " id="javob" name="javob" cols="30" required rows="10"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
          </form>
      </div>
  </div>
</div>




</body>
</html>