<?php

$page = (int) ($_GET['p'] ?? 1);

if (!in_array($page, [1, 2])) {
    header('Location: http://localhost/zuikiai/010/uzduotys/web/u6.php');
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

<body style="background-color:green;">

<?php elseif ($page == 2): ?>

    <body style="background-color:yellow;">

    <?php endif ?>

    <fieldset>

        <form>
            <div>
                <label>GET </label>
                <input type="text">
            </div>
            <div>
                <button type="submit">Green</button>
            </div>

        </form>
    </fieldset>

    <fieldset>

        <form>
            <div>
                <label>POST</label>
                <input type="text">
            </div>
            <div>
                <button type="submit">Yellow</button>
            </div>

        </form>
    </fieldset>


</body>

</html>