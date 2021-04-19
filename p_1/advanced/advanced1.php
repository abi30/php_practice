<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $characters = array(
        "Anime" => array(
            "Dragonball" => "Goku",
            "Heidi" => "Peter",
            "Shingeki no Kyojin" => "Eren Jaeger"
        ) ,
        "Cartoon" => array(
            "Ducktales" => "Dagobert",
            "Chip & Chap" => "Trixie",
            "The Smurfs" => "Papa Smurf"
        ) ,
        "Games" => array(
            "Devil May Cry" => "Dante",
            "Metal Gear Solid" => "Solid Snake",
            "Final Fantasy X" => "Tidus"
        )
        );

        echo "<h1>This is a tale about some random Characters joining each other in a different world</h1>
        <p>".$characters["Anime"]["Dragonball"]. " goes on an adventure and meets " .$characters["Cartoon"]["Chip & Chap"].
        "<p>They suddenly encounter ".$characters["Games"]["Metal Gear Solid"]. " and ask each other what this dood is even doing there.";

        echo "<p>".$characters["Anime"]["Dragonball"]." was suddenly replaced by ";

        $characters["Anime"]["Dragonball"] = "Vegeta";

        echo $characters["Anime"]["Dragonball"].". No one knows why...</p>";
    ?>
</body>
</html>