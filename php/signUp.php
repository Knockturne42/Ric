<?php

include_once 'requete.php';


var_dump($_POST);
$columnArray = array('pseudoUtilisateur', 'adresseEmailUtilisateur', 'numeroUtilisateur', 'passwordUtilisateur', 'dateInscription');
$valueArray = array($_POST['pseudoUtilisateur'], $_POST['adresseEmailUtilisateur'], $_POST['numeroUtilisateur'], $_POST['passwordUtilisateur'], date("Y-m-d H:i:s"));
var_dump($valueArray);
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
$conditionArray = '';

$test = new requete($dbConnectionArray, $columnArray, $valueArray, 'utilisateur', '');

$test->insertDb();

?>