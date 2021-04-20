
 
<?php 

require_once 'db_connect.php';
$sql ="SELECT * FROM test";
// $result=mysqli_query($connect,$sql);

$result= mysqli_query($connect, $sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo "<pre>";
var_dump($rows);
echo "</pre>";
?>

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
<h1>helloo</h1>
  
<a href="create.php">create new reord</a> <br><br>

<?php 
       $i = 0;
       while($i < count($rows)){

            echo "<p>" .$rows[$i][ 'first_name']." ".$rows[$i]['last_name' ]. "<a href ='delete.php?id=".$rows[$i]['id']."'>delete</a></p>" ;

           $i++;
       }

       // foreach ($rows as $row) {
        //     echo "<p>" .$row['first_name']." ".$row['last_name' ]."</p>";
        // }
       ?>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>