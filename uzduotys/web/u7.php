<?php

$color = $_GET['color'] ?? 'green';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = 'yellow';
    header('Location: http://localhost/zuikiai/010/uzduotys/web/u7.php?color:pink');
    exit;
}

//$color =$_SERVER['REQUEST_METHOD'] == 'POST' ? 'yellow : 'green'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u6</title>
    
</head>

    <body style="background-color:<?= $color ?>;">>
            

    <fieldset>
        <form action="http://localhost/zuikiai/010/uzduotys/web/u7.php" method="get">
            <div>
                <label>GET</label>
                <input type="text">
            </div>
            <div>
                <button>Green</button>
            </div>

        </form>
    </fieldset>

    <fieldset>

        <form action="http://localhost/zuikiai/010/uzduotys/web/u7.php" method="post">
            <div>
                <label>POST</label>
                <input type="text">
            </div>
            <div>
                <button>Yellow</button>
            </div>

        </form>
    </fieldset>


</body>

</html>