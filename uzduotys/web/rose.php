<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: http://localhost/zuikiai/010/uzduotys/web/blue.php', true, 303);
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pink</title>
    
</head>

    <body style="background-color:red;">
            

        <form action="http://localhost/zuikiai/010/uzduotys/web/pink.php" method="post">
           
            <div>
                <button>Go to pink</button>
            </div>

        </form>
  