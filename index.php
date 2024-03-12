<?php
session_start();
$_SESSION['role'] = "admin";
$_SESSION['user'] = [
    'firstname' => 'Julien',
    'lastname' => 'Dunia',
    'login' => 'deoking',
    'password' => 1111
];
$_SESSION['marque'] = "SONY";
$_SESSION['date'] = "30/11/2023";




$title = "Page d'accueil";
$nav = "index";
require "header.php";
?>
<main role="main" class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</main><!-- /.container -->
<?php
require "footer.php";
?>