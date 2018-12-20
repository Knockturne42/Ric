<?php

include_once 'requete.php';

$columnArray = array('pseudoUtilisateur', 'idUtilisateur');
$valueArray = array('pseudoUtilisateur LIKE "'.$_POST['pseudoUtilisateur'].'"', 'AND passwordUtilisateur LIKE "'.$_POST['passwordUtilisateur'].'"');
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
$condition = ' pseudoUtilisateur LIKE "'.$_POST['pseudoUtilisateur'].'"'.' AND passwordUtilisateur LIKE "'.$_POST['passwordUtilisateur'].'" ';

$test = new requete($dbConnectionArray, $columnArray, $valueArray, 'utilisateur', '', $condition);

$test->selectDb();
var_dump($test->queryDb->fetch());

?>

<!-- SELECT utilisateur.pseudoUtilisateur, utilisateur.idUtilisateur FROM utilisateur WHERE 1 AND utilisateur.pseudoUtilisateur LIKE "tbd5" AND utilisateur.passwordUtilisateur LIKE "testtest" -->