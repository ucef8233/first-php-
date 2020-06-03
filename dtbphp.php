<?php
session_start();
require_once 'connexion.php';
$reponse = $connexion->query('SELECT * FROM users');
$reponse->execute();
$fetch = $reponse->fetchAll();

?>
<pre>
<?php print_r($fetch[1]);   ?>
</pre>