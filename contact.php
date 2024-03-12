<?php
// Attention on reprend la session ouverte
session_start();
$title = "Contact";
$nav = "contact";
require "header.php";
?>
<h1>Debug</h1>
<p><?php var_dump($_SESSION); ?></p>
<br>

<h1>Nous contacter </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id odit quia veniam quas dolorem ad tempora cum. Aliquam, fuga. Recusandae ducimus veniam est? Molestias quasi, ex dolorem similique ullam exercitationem, voluptatibus ipsa maxime fugiat, voluptates quam! Cum neque dolor nostrum ipsam consectetur totam qui deserunt fugit tempore, veritatis nisi necessitatibus?</p>
<?php
require "footer.php";
?>