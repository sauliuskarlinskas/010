<?php

$page = (int) ($_GET['p'] ?? 1);

if (!in_array($page, [1, 2])) {
    header('Location: http://localhost/zuikiai/010/uzduotys/web/u4.php');
    die();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background edition</title>
</head>

<?php if ($page == 1): ?>

    <body style="background-color:#fff700;">

        <nav>
            <a href="http://localhost/zuikiai/010/uzduotys/web/u4.php?p=2" style="font-size:20px;">ORANGE</a>
        </nav>

    <?php elseif ($page == 2): ?>

        <body style="background-color:orange;">

            <nav>
                <a href="http://localhost/zuikiai/010/uzduotys/web/u4.php?p=1" style="font-size:20px;">LEMON</a>
            </nav>

        <?php endif ?>






    </body>

</html>