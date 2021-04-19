<?php
    $cars = array(
        "BMW" => array(
            "Model" => "Series 5",
            "Price" => 120,
            "Place" => "Vienna",
            "Availability" => "Available",
            "Img" => "https://images.unsplash.com/photo-1523983388277-336a66bf9bcd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
        ) ,
        "Mercedes" => array(
            "Model" => "Class S",
            "Price" => 125,
            "Place" => "Salzburg",
            "Availability" => "Not Available",
            "Img" => "https://images.unsplash.com/photo-1608216601876-f3623092e9ea?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2702&q=80"
        ) , 
        "Audi" => array (
            "Model" => "S5",
            "Price" => 140,
            "Place" => "Berlin",
            "Availability" => "Not Available",
            "Img" => "https://images.unsplash.com/photo-1612956946912-b2d8e5fd65a8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1353&q=80"
        ) ,
        "VW" => array (
            "Model" => "Arteon",
            "Price" => 135,
            "Place" => "Munich",
            "Availability" => "Available",
            "Img" => "https://images.unsplash.com/photo-1550955283-942921634b0d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1526&q=80"
        ) ,
        "Tesla" => array (
            "Model" => "Model S Plaid",
            "Price" => 145,
            "Place" => "Berlin",
            "Availability" => "Available",
            "Img" => "https://images.unsplash.com/photo-1536700503339-1e4b06520771?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
        ) ,
        "Porsche" => array (
            "Model" => "Panamera",
            "Price" => 145,
            "Place" => "Frankfurt",
            "Availability" => "Available",
            "Img" => "https://images.unsplash.com/photo-1611859266720-147cc87658f1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80"
        ) ,
        "Ford" => array (
            "Model" => "Mustang GT",
            "Price" => 130,
            "Place" => "Melbourne",
            "Availability" => "Not Available",
            "Img" => "https://images.unsplash.com/photo-1566008885218-90abf9200ddb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80"
        ) ,
        "Lexus" => array (
            "Model" => "RC-350F",
            "Price" => 135,
            "Place" => "New York",
            "Availability" => "Available",
            "Img" => "https://images.unsplash.com/photo-1598551292182-1df7b0c7504c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
        )
    );

    function showItem($brand, $model, $price, $place, $availability, $img)
                {
                    return "<div class=\"col-12 col-md-6 col-lg-4 my-3\">
                    <div class=\"card\">
                        <div style=\"overflow: hidden; position: relative; height: 35vh;\">
                            <img src=\"".$img."\" class=\"card-img-top\" alt=\"#\" style=\"position: absolute\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">".$brand."</h5>
                            <p class=\"card-text\">Model: ".$model."</p>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Price / day: ".$price." €</li>
                            <li class=\"list-group-item\">Location: ".$place."</li>
                            <li class=\"list-group-item\">Availablility: ".$availability."</li>
                        </ul>
                        <div class=\"card-body\">
                        <button type=\"button\" class=\"btn btn-primary\">Rent this car!</button>
                        </div>
                    </div>
                </div>";
                };
?>