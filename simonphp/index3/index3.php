<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $zoznam_hry = ["DokiDoki", "Nekopara", "HoloCure", "Isaac", "LeaguOfLegends", "Noita"];
    print_r($zoznam_hry);
    echo "<br>";

    $zoznam_hry[count($zoznam_hry)-1] = "Opak Noity = Terraria";
    print_r($zoznam_hry);
    echo "<br>";


    
    $zverinec = ["pes", "macta", "krtecek", "sloncek", "bober", "had"];
    echo in_array("krtecek", $zverinec);
    echo " " . $zverinec[in_array("krtecek",$zverinec)+1];
    
    ?>
</body>
</html>