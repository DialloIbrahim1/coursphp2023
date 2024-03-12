<?php
session_start();
//c'est pour tuer la session spécifié
// unset($_SESSION['user']);
//c'est pour tuer toutes les sessions existantes
session_unset();

$nav = "apropos";
require "header.php";
?>
<h1>A propos de nous</h1>
<br>
<h4>Qui sommes nous ?</h4>
<p>Nous sommes un organisme de solidarité</p>
<?php
require "footer.php";
?>