<?php

include_once 'requete.php';

$columnArray = array('contentProposition', 'dateProposition');
$valueArray = array($_POST['contentProposition'], date("Y-m-d H:i:s"));
var_dump($valueArray);
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
$condition = '';

$test = new requete($dbConnectionArray, $columnArray, $valueArray, 'proposition', '');

$test->insertDb();

?>