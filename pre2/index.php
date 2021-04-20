
 


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





function printName(){
  echo "abdulla Rakib 👍<br/>";
}
printName();



function addFuction($num1,$num2){
$sum=$num1+$num2;
echo "sum of the two number is : $sum .<br/>";
}
addFuction(4,5);


function addFuntionsForTree($n1,$n2,$n3){
  $sumOfTree=$n1+$n2+$n3;
  return $sumOfTree;

}

$return_value=addFuntionsForTree(4,6,57);
echo "REturn value from the function(addFuntionsForTree): $return_value.<br/>";






// function formatted_dump($content){
//   echo "<pre>";
//   var_dump($content);
//   echo "</pre>";
// }


// $name = "abdulla";
// function fullName(){
//   $surname="rakib";

//   $f_name= $GLOBALS["name"]." ".$GLOBALS["surname"];
//   return $f_name;
// }

// formatted_dump($GLOBALS);





$date = date("l");
if($date == "Tuesday")
  echo "It's Friday, weekend is around the corner....:-)<br/>";
else 
echo "Don't watch the clock ; do what it does, keep on going!<br/>" ;
echo date('l')."<br/>";
echo date('D')."<br/>";



// $today = date("N");
// if ($today==1){
//   echo "It's saterday, let's get the week started";

// }elseif ($today==2) {
//    echo "It's Sunday, let's get the week started";
// }
// elseif ($today==3) {
//    echo "It's Monday, let's get the week started";
// }
// elseif ($today==4) {
//    echo "It's Tuesday, let's get the week started";
// }
// elseif ($today==5) {
//    echo "It's Wednesday, let's get the week started";
// }
// elseif ($today==6) {
//    echo "It's Thursday, let's get the week started";
// }
// else {
//    echo "It's Friday, let's get the week started";
// }







$today = date("D");
switch($today){
   
      case "Mon":
echo "It's Monday, let's get the week started<br/>";
break;
      case "Tue":
 echo "It's Tuesday, let's get the week started<br/>";
 break;
      case "Wed":
 echo "It's Wednesday, let's get the week started<br/>";
 break;
      case "Thu":
echo "It's Thursday, let's get the week started<br/>";
break;
      case "Fri":
echo "It's Friday, let's get the week started<br/>";
break;   
      case "Sat":
 echo "It's saterday, let's get the week started<br/>";
 break;
      case "Sun":
 echo "It's Sunday, let's get the week started<br/>";
 break;
      default :
echo "If you seeing this mesage something went wrong:)<br/>";        

 
}





$today = date("D");
switch ($today) {
    case "Mon":
         echo "Today is Monday <br/>";
        break;
    case "Tue":
         echo "Today is Tuesday <br/>";
        break;
    case "Wed":
         echo "Today is Wednesday <br/>";
        break;
    case "Thu":
         echo "Today is Thursday <br/>";
        break;
    case "Fri":
         echo "Today is Friday <br/>";
        break;
    case "Sat":
         echo "Today is Saturday <br/>";
        break;
    case "Sun":
         echo "Today is Sunday <br/>";
        break;
    default:
        echo  "If you seeing this message, something went wrong :) <br/>";
}



$session = "rakib";
$other= "ohter people";
$user = ($session =="rakib") ? $session : $other;
echo $user ."<br/>";


function confirm(){
echo "affirmative <br/>";
}
function deny(){
  echo "negative<br/>";
}
(10>4)? confirm():deny();



$varone = 4>3;
$vartwo = 4<3;
$vartree = null;

echo ($varone ? "statement is true .<br/>":"the condition was false or null")."<br>";
echo ($vartwo ? "statement is true .<br/>":"the condition was false or null")."<br>";
echo ($vartree ? "statement is true .<br/>":"the condition was false or null")."<br>";



echo (@$varfour ? "statement is true .<br/>":"the condition does't not exist")."<br>";



$var1  = 42;
$var2 = null;

echo ($var1 ?? "the condition was false or null")."<br>";
echo ($var2 ??"the condition was false or null")."<br>";
echo ($var3 ??"the condition doesn't exist")."<br>";









































?>  



</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>