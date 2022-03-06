<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $Open_Times;
?>
<body>
<div class="container" style="background:gray">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>
    <h4 class="text-warning">Sportcenter HealthOne contact gegevens:</h4>
    <p class="text-white">
        Telefoon nummer : 0152578924 <br>
        Adres: zuidhoornseweg 6a, 2635DJ Den Hoorn <br>
        E-Mail: info@healthone.com
    </p>
    <hr>
    <h5 class="text-warning">Contact opnemen</h5>
    <form method="post">
        <div class="form-group">
            <label class="text-white" for="email">E-mail address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Hier invoeren">
            <small class="text-warning">Voer uw persoonlijke e-mail in.</small>
        </div>
        <div class="form-group">
            <label class="text-white" for="message">Bericht</label>
            <input type="text" class="form-control" name="message" placeholder="Hier invoeren">
            <small class="text-warning">Voer hier uw bericht aan ons in.</small>
        </div>
        <button type="submit" name="verzenden" class="btn btn-light">Submit</button>
    </form>
    <hr>
    <br>
    <?php foreach ($Open_Times as $shophour) : ?>

        <table>
            <tr><th><p><?= $shophour->day; ?>:</p> </th><td><p> <?= $shophour->opening_time; ?> - <?= $shophour->closing_time; ?></p></td></tr>
        </table>
    <?php endforeach; ?>
    <hr>

    <h4 class="text-warning">Locatie:</h4>
    <div class="foreign-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.639189021884!2d4.33007681606151!3d51.99522967971829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1snl!2snl!4v1633693263063!5m2!1snl!2snl" width="450" height="450" style="border-radius:50%;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>

</html>