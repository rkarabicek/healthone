<?php
logout();
$_SESSION["isLoggedIn"] = false;
?>

<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
    <div class="container" style="background:gray">
        <?php
        include_once('defaults/header.php');
        include_once('defaults/menu.php');
        include_once('defaults/pictures.php');

        ?>
        <h3 class="text-warning">U bent uitgelogd.</h3>
        <a class="text-white" href="/login">
            Klik hier om terug naar de inlog pagina te gaan.
        </a>
        <hr>

        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>

</html>