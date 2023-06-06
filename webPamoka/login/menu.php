<h3>

<a href="http://localhost/zuikiai/010/webPamoka/login/">home</a>

<?php if (isset($_SESSION['name'])) : ?>

<a href="http://localhost/zuikiai/010/webPamoka/login/member.php">member</a>

<form action="http://localhost/zuikiai/010/webPamoka/login/login.php?logout" method="post">
    <button type="submit">logout from <?= $_SESSION['name'] ?></button>
</form>


<?php else : ?>

<a href="http://localhost/zuikiai/010/webPamoka/login/login.php">login</a>


<?php endif ?>


<h3>