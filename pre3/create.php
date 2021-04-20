<?php 


require_once 'db_connect.php';

if (isset($_POST["submit"])){

    $fname= $_POST["first_name"];
    $lname= $_POST["last_name"];

    $sql ="INSERT INTO test(first_name,last_name)VALUES ('$fname','$lname')";

    if(mysqli_query($connect,$sql)==true){
        echo "New record created <br>
        <a href='index.php'>Home</a>";
    }
}

?>
 <form method="post" >
           <input type="text"  name="first_name" placeholder= "Type your first name">
           <input type="text"  name="last_name" placeholder= "Type your last name">
           <input type="submit"  name="submit" value= "submit">
       </form>