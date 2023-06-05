<?php

$checkboxNr = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

$checkboxNrLenght = rand(3, 10);

//$checkboxNr = (range('A', 'J'), 0, rand(3, 10));


$color = $_GET['color'] ?? 'black';

$formShow = $_GET['formShow'] ?? 1;

$counter = $_GET['counter'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $counter = count($_POST['masyvas'] ?? []);

    header('Location: http://localhost/zuikiai/010/uzduotys/web/u9.php?counter=' . $counter . "&color=white&formShow=0", true, 303);
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u9</title>

</head>

<body style="background-color:<?= $color ?>;">

    <?php if (!$formShow): ?>
        <h1>
            Checked:<?= $counter ?>
        </h1>
    <?php endif ?>

    <?php if ($formShow): ?>
        <form action="http://localhost/zuikiai/010/uzduotys/web/u9.php" method="post">
            <?php for ($i = 0; $i < $checkboxNrLenght; $i++) {
                echo '<label style="color:purple; for="' . $i . '">' . $checkboxNr[$i] . '</label>';
                echo '<input type="checkbox" id="' . $i . '" name="masyvas[]" />';
            }
            ?>

            <div>
                <button type="submit">Change color</button>
            </div>
            <a href="http://localhost/zuikiai/010/uzduotys/web/u9.php" >go back</a>

        </form>
    <?php endif ?>




</body>

</html>