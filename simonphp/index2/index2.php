<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test util</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="cl-md-12 hore">
                <h1>Nadpis</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sit assumenda amet necessitatibus cum?</p>
            </div>
        </div>

        <div class="row">
            <div class="cl-md-12 stred">
                <p>test array</p>
                <?php
                $ziaci = ["Tereza", "Jakub", "Yevhenii", "Simon", "Filip", "Martin", "Tobias"];
                $dni = ["pondelok", "Utorok", "Streda", "Stvrtok", "Piatok", "Sobota", "Nedela"];
                sort($ziaci);
                foreach($ziaci as $b) {
                    echo $b. "<br>";
                }

                echo "<br>";
                echo "<h1>Dni</h1>";

                foreach($dni as $c) {
                    echo $c. "<br>";
                }
                echo "<br>";
                print_r($dni);
                ?>
            </div>
        </div>

        <div class="row">
             <div class="cl-md-12 dole cislatext">
                <?php
                for ($x = 0; $x <= 999; $x++) {
                    echo  "$x <br>";
                  }
                ?>
            </div>
        </div>
    </div>
 
    
</body>
</html>