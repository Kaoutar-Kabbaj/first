<?php 

 try{
    $db  = new PDO('mysql:host=localhost;dbname=projet_cours','root','');
   // var_dump($db);die;
}catch(PDOException $e){
    die( 'Connexion impossible'.$e->getMessage() );
}



  ?>