<?php
try{
    $pdo = new PDO('mysql:dbname=courphp3;host=localhost', "root",""); 
    //On définit le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie<br>';
    $resultat = $pdo->query('SELECT * from users' );
    //var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    
    foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $user){
        echo $user->id_user . " ". $user->firstname . " ". $user->lastname . " ". $user->gender . " ". $user->date_of_birth . " ". $user->city . " ". $user->weight_kg ."<br>";
    }
}catch (PDOException $e){
    die('Erreur : '. $e->getMessage());
} 

?>