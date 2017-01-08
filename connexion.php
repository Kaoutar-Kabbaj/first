
<?php
 
$dsn = "mysql:host=198.11.234.66;dbname=d169e7c02c6e942cca20e9b8bf8a1c45f";
$username = "uqdWwrhrZqRPC";
$password = "p95ASytUsiwEC";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
 

  
    $pdo = new PDO($dsn, $username, $password, $options);

var_dump($pdo);
if(!$pdo){

	die('Could not connect: ');
}
else
{
    die('Connexion à la base de données !');
}
?>




