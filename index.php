<?php
    $partite = [
        0 => [
            "casa" => "Olimpia Milano",
            "ospite" => "Cantù",
            "punti_c" => "55",
            "punti_o" => "60"
        ],
        1 => [
            "casa" => "Torino",
            "ospite" => "Firenze",
            "punti_c" => "70",
            "punti_o" => "48"
        ],
        2 => [
            "casa" => "Livorno",
            "ospite" => "Pisa",
            "punti_c" => "100",
            "punti_o" => "75"
        ],
        3 => [
            "casa" => "Napoli",
            "ospite" => "Sardegna",
            "punti_c" => "50",
            "punti_o" => "68"
        ],
        4 => [
            "casa" => "Sicilia",
            "ospite" => "Empoli",
            "punti_c" => "87",
            "punti_o" => "59"
        ],
    ];

    // echo var_dump($partite[1]["casa"]);
    // echo sizeof($partite);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snacks</title>
</head>
<body>
    <ul>
        <?php
            for($i = 0; $i < sizeof($partite); $i++)
                echo "<li>{$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["punti_c"]}-{$partite[$i]["punti_o"]}</li>"; 
        ?>
    </ul>
</body>
</html>