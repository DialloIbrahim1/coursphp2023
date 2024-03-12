<?php
// Attention on reprend la session ouverte
$title = "Login";
$nav = "login";
require "header.php";

//cette condition verifie si on est connecté grace a notre fonction qu'on avait 
////verifie si on est connecté. Dans le cas ou on est connecté il nous redirige vers dashboard
if (is_connected()) :
    header("Location: /coursphp3/dashboard");
endif;


$erreur = null;
if (!empty($_POST['pseudo']) || !empty($_POST['password'])) :
    if ($_POST['pseudo'] === "Julien" && $_POST['password'] === "12345") :
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['connected'] = true;
        //redirection
        header('Location: /coursphp3/dashboard.php');
    else :
        $erreur = "Identifiants incorrects !";
    endif;
endif;

$erreur = null;
if (!empty($_POST['pseudo']) || !empty($_POST['password'])) :
    if ($_POST['pseudo'] === "Diallo" && $_POST['password'] === "12345") :

        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['connected'] = true;
        //redirection
        header('Location: /coursphp3/dashboard.php');
    else :
        $erreur = "Identifiants incorrects !";
    endif;
endif;

if ($erreur) : ?>
    <div class="alert alert-danger">
        <?php echo $erreur ?>
    </div>
<?php endif;
?>



<div class="m-5">
    <h1>Login</h1>

    <form action="/coursphp3/login.php" method="POST">
        <input type="text" name="pseudo" placeholder="Votre Login">
        <br><br>
        <input type="password" name="password" placeholder="Votre mot de passe">
        <br><br>
        <button class="btn btn-secondary" type="submit">Se connecter</button>
    </form>
</div>

<?php
require "footer.php";
?>