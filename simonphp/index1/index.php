<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Nadpis</h1>
    <?php
    $a = 1;
    $b = 2;
    $den = 'Streda';
    $pozdrav = 'Uga Uga';
    echo "Dnes je " . $den , "<br>";
    echo "Ahoj " . $pozdrav , "<br>";
    echo "cislice " . $a . " " . $b , "<br>";
    echo "<p class='text'>Dnes je " . $den . ", a pozdravuje ta " . $pozdrav ."<p>";
    ?>

    
</body>
</html>