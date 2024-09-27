<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grado Smartphone</title>
</head>
<body>
    <?php
        $modello = "Iphone 14";
        $grado = "a";

        switch ($grado) {
            case "a":
                echo "<h2>L'" . $modello . " è perfetto, pari a nuovo</h2>";
                break;
            case "b":
                echo "<h2>L'" . $modello . " è in ottime condizioni</h2>";
                break;
            default:
                echo "<h2>L'" . $modello . " presenta graffi e/o segni di usura</h2>";
                break;
        }
    ?>
</body>
</html>