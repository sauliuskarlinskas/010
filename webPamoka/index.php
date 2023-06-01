<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $what = $_GET['what'] ?? 'nieko'; //defoultai
    $color = $_GET['color'] ?? 'green'; //defoultai

    file_put_contents(__DIR__ . '/memo.ser', serialize([$what, $color]));

    header('Location: http://localhost/zuikiai/010/webPamoka/');
    die();

} else {

    if (!isset($_GET['what'])) {

        [$what, $color] = unserialize(file_GET_contents(__DIR__ . '/memo.ser'));

    } else {
        $what = $_GET['what'] ?? 'nieko';
        $color = $_GET['color'] ?? 'green';
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ką aš žinau</title>
</head>

<body>
    <h1 style="color:<?= $color ?>;"><?= $what ?></h1>
    <fieldset>
        <legend>GET</legend>

        <form action="http://localhost/zuikiai/010/web/">
            <div>
                <label>gyvunas: </label>
                <input type="text" name="what">
            </div>
            <div>
                <label>spalva: </label>
                <input type="text" name="color">
            </div>
            <div>
                <button type="submit">Go</button>
            </div>
        </form>
        <fieldset>
            <legend>POST</legend>

            <form action="http://localhost/zuikiai/010/web/" method="post">
                <div>
                    <label>gyvūnas: </label>
                    <input type="text" name="what">
                </div>
                <div>
                    <label>spalva: </label>
                    <input type="text" name="color">
                </div>

                <div>
                    <button type="submit">Go</button>
                </div>

            </form>
        </fieldset>

</body>

</html>