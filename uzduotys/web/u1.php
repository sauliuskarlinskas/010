<?php

$page = (int) ($_GET['p'] ?? 1);

if (!in_array($page, [1, 2])) {
    header('Location: http://localhost/zuikiai/010/uzduotys/web/.php');
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

    <body style="background-color:black;">

    <?php elseif ($page == 2): ?>

        <body style="background-color:red;">

        <?php endif ?>

        <nav>
            <a href="http://localhost/zuikiai/010/uzduotys/web/u1.php?p=1" style="font-size:20px;">Color1</a>
            <a href="http://localhost/zuikiai/010/uzduotys/web/u1.php?p=2" style="font-size:20px;">Color2</a>
        </nav>

        <?php if ($page == 1): ?>

            <h1 style="color:white;">Black</h1>

        <?php elseif ($page == 2): ?>

            <h1 style="color:white;">Red</h1>

        <?php endif ?>

    </body>

</html>