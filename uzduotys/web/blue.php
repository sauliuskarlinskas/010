<?php
if (isset($_GET['redirect'])) {
    header('Location: http://localhost/zuikiai/010/uzduotys/web/red.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue</title>
    <style>
        a {
            color: red;
            font-size: 3em;
            padding: 40px;
        }
    </style>
</head>
<body style="background:blue;">

<a href="?redirect">Red</a>
    
</body>
</html>