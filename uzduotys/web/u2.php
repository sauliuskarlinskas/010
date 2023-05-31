<?php

$page = (int) ($_GET['p'] ?? 1);

if (!in_array($page, [1, 2])) {
    header('Location: http://localhost/zuikiai/010/uzduotys/web/u2.php');
    die();
}
$color = "color";

?>

<!DOCTYPE HTML>
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

    <body style="background-color:$color">

    <?php endif ?>

    <div>
        <nav>
            <a href="http://localhost/zuikiai/010/uzduotys/web/u2.php?p=1"
                style="font-size:20px; font-weight:bold;">black</a>
        </nav>
        <fieldset style="background-color:grey;">
            <form>
                <div>
                    <label>color: </label>
                    <input type="text" name="color">
                </div>
                <div>
                    <button type="submit">GET</button>
                </div>
            </form>
        </fieldset>

    </div>

</body>

</html>