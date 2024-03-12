<?php
session_start();
$title = "Jeu du Hasard";
$nav = "jeuDuHasard";
require "header.php";
?>
<h1>Jeu du Hasard</h1>

<?php
if (!isset($_SESSION['numeroGagnant'])) {
    $_SESSION['numeroGagnant'] = rand(0, 10);
}

//Ici c'est la version avec une variable numero gagnant
// if (!isset($_SESSION['numeroGagnant'])) {
//     $_SESSION['numeroGagnant'] = rand(0, 10);
//     $numeroGagant = $_SESSION['numeroGagnant'];
// } else {
//     $numeroGagant = $_SESSION['numeroGagnant'];
// }


if (isset($_POST['nombre'])) :
    if ($_POST['nombre'] <= 10 && $_POST['nombre'] >= 0) :
        if ($_POST['nombre'] > $_SESSION['numeroGagnant']) :
            echo "Votre nombre " . $_POST['nombre'] . " est trop grand !";
        elseif ($_POST['nombre'] < $_SESSION['numeroGagnant']) : ?>
            Votre nombre est trop petit !
        <?php else : ?>
            Vous avez bien trouver le bon nombre <?php echo $_SESSION['numeroGagnant'];
                                                    unset($_SESSION['numeroGagnant']); ?>
        <?php endif;
    else : ?>
        Erreur, introduisez un nombre entre 0 et 10 compris
<?php endif;
endif;
?>



<form action="/coursphp3/jeuDuHasard.php" method='POST'>
    <input type="number" name="nombre" placeholder="Entre 0 et 10">
    <button class="btn btn-secondary" type="submit">Deviner</button>
</form>
<?php
require "footer.php";
?>