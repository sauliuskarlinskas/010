<?php


$color = $_GET['color'] ?? 'black';

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background edition</title>
</head>

<body style="background-color:<?= $color ?>;">

    <div>
        <nav>
            <a href="http://localhost/zuikiai/010/uzduotys/web/u3.php?color=black" style="font-size:20px; font-weight:bold;">black</a>
        </nav>
        <fieldset style="background-color:grey;">
            <form action="http://localhost/zuikiai/010/uzduotys/web/u3.php">
                <div>
                    <label>color: </label>
                    <input type="text" name='color'>
                </div>
                <div>
                    <button type="submit">GET</button>
                </div>
            </form>
        </fieldset>

    </div>

</body>

</html>