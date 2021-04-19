<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Car Rentals</title>
</head>
<body>
    <header>
        <?php
        include 'navigation.php';
        echo "$navigation";
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 30%;">
        <h1 class="text-center text-light">Rent a Car<br>Easier than ever!</h1>
    </div>
    <main>
        <div class="container">
            <div class="row justify-content-evenly py-5">
                <?php
                include 'cars.php';
                $brand = array_keys($cars)[0];
                $model = $cars['BMW']['Model'];
                $price = $cars['BMW']['Price'];
                $place = $cars['BMW']['Place'];
                $availability = $cars['BMW']['Availability'];
                $img = $cars['BMW']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[1];
                $model = $cars['Mercedes']['Model'];
                $price = $cars['Mercedes']['Price'];
                $place = $cars['Mercedes']['Place'];
                $availability = $cars['Mercedes']['Availability'];
                $img = $cars['Mercedes']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[2];
                $model = $cars['Audi']['Model'];
                $price = $cars['Audi']['Price'];
                $place = $cars['Audi']['Place'];
                $availability = $cars['Audi']['Availability'];
                $img = $cars['Audi']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[3];
                $model = $cars['VW']['Model'];
                $price = $cars['VW']['Price'];
                $place = $cars['VW']['Place'];
                $availability = $cars['VW']['Availability'];
                $img = $cars['VW']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[4];
                $model = $cars['Tesla']['Model'];
                $price = $cars['Tesla']['Price'];
                $place = $cars['Tesla']['Place'];
                $availability = $cars['Tesla']['Availability'];
                $img = $cars['Tesla']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[5];
                $model = $cars['Porsche']['Model'];
                $price = $cars['Porsche']['Price'];
                $place = $cars['Porsche']['Place'];
                $availability = $cars['Porsche']['Availability'];
                $img = $cars['Porsche']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[6];
                $model = $cars['Ford']['Model'];
                $price = $cars['Ford']['Price'];
                $place = $cars['Ford']['Place'];
                $availability = $cars['Ford']['Availability'];
                $img = $cars['Ford']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);

                $brand = array_keys($cars)[7];
                $model = $cars['Lexus']['Model'];
                $price = $cars['Lexus']['Price'];
                $place = $cars['Lexus']['Place'];
                $availability = $cars['Lexus']['Availability'];
                $img = $cars['Lexus']['Img'];

                echo showItem($brand, $model, $price, $place, $availability, $img);
                ?>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include 'footer.php';
        echo "$footer";
        ?>
    </footer>   
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>