
 


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



<div class="container">

<h1>pre_work_day_2</h1>

<form action="index.php"method="POST"; >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">your name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="name" required>
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" name="age" id="age" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">your email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<?php 

if(isset($_POST["submit"])){
  if($_POST["name"] && $_POST["password"] && $_POST["email"] && $_POST["age"] ){
            echo "Welcome ". $_POST[ 'name']. "<br />" ;
               echo "You are " . $_POST['age']. " years old.<br/>" ;
               echo "And your email is :" . $_POST['email']. "<br/>";
  }
}






?>  



</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>