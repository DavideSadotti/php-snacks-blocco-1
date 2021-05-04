<?php

    // $matches = [
    //     "abc1" => [
    //         "casa" => "Olimpia Milano",
    //         "casaPunti" => 55,
    //         "ospite" => "Cantù",
    //         "ospitePunti" => 60
    //     ],
    //     "abc2" => [
    //         "casa" => "Dinamo Sassari",
    //         "casaPunti" => 89,
    //         "ospite" => "Reggiana",
    //         "ospitePunti" => 82
    //     ],
    //     "abc3" => [
    //         "casa" => "Cremona",
    //         "casaPunti" => 89,
    //         "ospite" => " Brescia",
    //         "ospitePunti" => 94
    //     ],
    //     "abc4" => [
    //         "casa" => "Trento",
    //         "casaPunti" => 77,
    //         "ospite" => "Brindisi",
    //         "ospitePunti" => 99
    //     ],
    //     "abc5" => [
    //         "casa" => "Virtus Bologna",
    //         "casaPunti" => 97,
    //         "ospite" => "Universo Treviso",
    //         "ospitePunti" => 68
    //     ]
    // ];

    // foreach ($matches as $k => $match) {
    //     echo "Partita: " . $k . "<br>" . $match["casa"] . " - " . $match["ospite"] . " | " . $match["casaPunti"] . " - " . $match["ospitePunti"] . "<br><br>";
    // };

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    $lunghezza = strlen($name);
    $posUno = strpos($mail, "@");
    $posDue = strpos($mail, ".");

    if($lunghezza > 3 && $posUno && $posDue && is_numeric((int)$age)){
        echo "Accesso riuscito!";
    }else{
        echo "Accesso negato";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
</body>
</html>