
 



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
  


<?php 


$a=0;
$b=0;
for ($i=0; $i <5 ; $i++) { 
    $a+=10;
    $b+=5;
}

echo ("at the end of the loop a = $a and b= $b </br>");


$i=0;
$num=50;
while ($i<10){

    $num--;
    $i++;

    if($i==5)break;
}

echo "loop stopped at i= $i and num is =$num.<br/>";

$i = 0;
       $num = 0;
       do
       {
           $i++;

        } while ($i < 10);
        $i-=1;

        echo ("At the end of the loop i=$i <br/>" );



        $array =array(1,3,45,3,6,9);
        foreach($array as $value){

            if($value ==3)continue;
            echo "Value is $value <br/>";
        }








?>  

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>