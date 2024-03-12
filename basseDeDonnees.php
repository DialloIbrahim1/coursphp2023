<?php
session_start();
$title = "basseDeDonnees";
$nav = "basseDeDonnees";
require "header.php";
try{
        $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root",""); 
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }catch (PDOException $e){
        die('Erreur : '. $e->getMessage());
    }
    ?>
   

<?php
// Attention on reprend la session ouverte

?>

<?php
 $titre= "Ajouter Try/Catch un article avec prepare et execute";
 $description = "Blablablabla";
 $datetime = new DateTime();
 $date = $datetime->format('Y-m-d H:i:s'); 
 $id = 3;
 try{
     $req = $pdo->prepare('INSERT INTO articles VALUES(:id_article, :article_name, :description, :createdAt, :updatedAt, :id_user_article)');
     $req->execute(array(
         'id_article' => NULL, 
         'article_name' => $titre,
         'description' => $description,
         'createdAt' => $date,
         'updatedAt' => $date,
         'id_user_article' => $id
     ));
     echo "Un nouvel article a été ajouté";
 }catch (PDOException $e){
     echo "Erreur : " . $e->getMessage();
 }

?>

<?php
 $titre= "Ajouter Try/Catch un article avec prepare et execute";
 $description = "Blablablabla";
 $datetime = new DateTime();
 $date = $datetime->format('Y-m-d H:i:s'); 
 $id = 3;
 try{
     $req = $pdo->prepare('INSERT INTO articles VALUES(:id_article, :article_name, :description, :createdAt, :updatedAt, :id_user_article)');
     $req->execute(array(
         'id_article' => NULL, 
         'article_name' => $titre,
         'description' => $description,
         'createdAt' => $date,
         'updatedAt' => $date,
         'id_user_article' => $id
     ));
     echo "Un nouvel article a été ajouté";
 }catch (PDOException $e){
     echo "Erreur : " . $e->getMessage();
 }

?>
    

<?php
require "footer.php";
?>

