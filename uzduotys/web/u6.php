
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u6</title>
    
</head>

    <body style=background:<?= isset($_GET['color']) && $_GET['color'] == 1 ? 'yellow' : 'green' ?> >
            

    <fieldset>
        <form>
            <div>
                <label>GET</label>
                <input type="text">
            </div>
            <div>
                <a href="http://localhost/zuikiai/010/uzduotys/web/u6.php">Green</a>
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
                <a href="http://localhost/zuikiai/010/uzduotys/web/u6.php?color=1">Yellow</a>
            </div>

        </form>
    </fieldset>


</body>

</html>