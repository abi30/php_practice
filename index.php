
 



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



 echo "<h1>My first PHP Script</h1>";
 $rectangle=3*2;
 echo "The rectangle area is equal to $rectangle</br>\n";

  


 function PrintName($name){
    $lastName = "shikder";
    echo"my name is $name $lastName </br>";

   }

  PrintName("abdulla");
 
 
  


  $sureName="rakib";
  $firstName="abdulla";
$age=32;

$total_sentence = "my name is ". $sureName." ".$firstName."age is ".$age."years old </br>";

echo gettype($total_sentence)."</br>";
echo gettype($age)."</br>";
echo gettype($total_sentence)."</br>";

$n = 2;  // define variable with global scope with value = 2

// function Local to test local scope
function Local()
   {
   $n =   5;    // Define variable with same name,
             // but with local function scope and different value
   echo "The var \$n from the Local() function = $n <br>";
   // $a will be interpreted and rendered as 5             
   }
Local();         // call the function
echo "The var \$n from outside the function = $n</br>" ;



// $name="jone";
// $surname="herak";

// function printNamenew(){
// global $fullName,$name,$surname;

// $fullName=$name." ".$surname;
// return $fullName;
// }

// echo printNamenew()."</br>" ;
// echo $fullName;

function lapCounter() {
  static $lap =  1;
  echo $lap. '<br>';
  $lap++;
}

lapCounter();
lapCounter();
lapCounter();












?>  

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>