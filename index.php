<?php

echo 'Hello Abdel'; 

?>


<?php
$link = mysql_connect("198.11.234.66", "u6n85qutOuBnx", "pMRPPWodbZ9BE")
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_close($link);
?>